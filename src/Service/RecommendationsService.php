<?php

declare(strict_types=1);

namespace Pair\Service;

use Pair\Contract\HasHooks;
use Pair\Migrator;

use const Pair\PAIR_DIR;
use const Pair\PAIR_URL;
use const Pair\VERSION;

defined('ABSPATH') || exit;

/**
 * Renders the storefront blocks: a recommendation grid after the single product
 * summary, cross-sell suggestions on the cart, and an optional "Recently viewed"
 * grid. Everything is rendered with the theme's own product-card markup.
 */
final class RecommendationsService implements HasHooks
{
    public function __construct(private readonly Recommender $recommender)
    {
    }

    public function registerHooks(): void
    {
        $s = $this->settings();

        if (empty($s['enabled'])) {
            return;
        }

        add_action('wp_enqueue_scripts', [$this, 'enqueueAssets']);
        add_shortcode('pair_recommendations', [$this, 'shortcodeRecommendations']);
        add_shortcode('pair_recently_viewed', [$this, 'shortcodeRecentlyViewed']);

        if (! empty($s['show_on_single'])) {
            add_action('woocommerce_after_single_product_summary', [$this, 'renderSingle'], 15);
        }

        if (! empty($s['show_recently_viewed']) && ! empty($s['recently_on_single'])) {
            add_action('woocommerce_after_single_product_summary', [$this, 'renderRecentlyViewed'], 16);
        }

        if (! empty($s['show_on_cart'])) {
            add_action('woocommerce_after_cart', [$this, 'renderCart']);
        }

        if (! empty($s['show_recently_viewed']) && ! empty($s['recently_on_cart'])) {
            add_action('woocommerce_after_cart', [$this, 'renderRecentlyViewed']);
        }
    }

    public function enqueueAssets(): void
    {
        wp_register_style('pair', PAIR_URL . 'assets/css/pair.css', [], VERSION);
        wp_enqueue_style('pair');
    }

    public function renderSingle(): void
    {
        $product = $this->currentProduct();
        if (! $product instanceof \WC_Product) {
            return;
        }

        $s = $this->settings();
        $products = $this->recommender->recommend(
            (string) $s['single_strategy'],
            [$product->get_id()],
            (int) $s['count'],
            ! empty($s['in_stock_only']),
        );

        /**
         * Filters the recommended products before they are rendered. Lets add-ons
         * (e.g. Pair Pro manual curation) reorder or replace the automatic picks.
         *
         * @param array<int, \WC_Product> $products The recommended products.
         * @param string                  $context  Placement: 'single' or 'cart'.
         * @param array<int, int>         $seedIds  The seed product IDs the picks are for.
         */
        $products = apply_filters('pair/recommendations', $products, 'single', [$product->get_id()]);

        $this->render($products, (string) $s['single_heading'], (int) $s['columns'], 'single');
    }

    public function renderCart(): void
    {
        $cartIds = $this->cartProductIds();

        $s = $this->settings();
        $products = $this->recommender->recommend(
            (string) $s['cart_strategy'],
            $cartIds,
            (int) $s['count'],
            ! empty($s['in_stock_only']),
        );

        /** This filter is documented in renderSingle(). */
        $products = apply_filters('pair/recommendations', $products, 'cart', $cartIds);

        $this->render($products, (string) $s['cart_heading'], (int) $s['columns'], 'cart');
    }

    public function renderRecentlyViewed(): void
    {
        $s      = $this->settings();
        $exclude = [];
        $product = $this->currentProduct();
        if ($product instanceof \WC_Product) {
            $exclude[] = $product->get_id();
        }

        $products = $this->recommender->recommend(
            'recently',
            [],
            (int) $s['count'],
            ! empty($s['in_stock_only']),
            $exclude,
        );

        // Recently-viewed genuinely can be empty for a first-time visitor; that
        // is fine, the block simply does not render.
        $this->render($products, (string) $s['recently_heading'], (int) $s['columns'], 'recently', false);
    }

    /** @param array<string,mixed>|string $atts */
    public function shortcodeRecommendations(array|string $atts): string
    {
        $s    = $this->settings();
        $atts = shortcode_atts(
            [
                'strategy' => (string) $s['single_strategy'],
                'count'    => (int) $s['count'],
                'columns'  => (int) $s['columns'],
                'heading'  => (string) $s['single_heading'],
            ],
            is_array($atts) ? $atts : [],
            'pair_recommendations',
        );

        $product = $this->currentProduct();
        $seed    = $product instanceof \WC_Product ? [$product->get_id()] : $this->cartProductIds();

        $products = $this->recommender->recommend(
            (string) $atts['strategy'],
            $seed,
            max(1, min(12, (int) $atts['count'])),
            ! empty($s['in_stock_only']),
        );

        return $this->capture($products, (string) $atts['heading'], (int) $atts['columns'], 'single');
    }

    /** @param array<string,mixed>|string $atts */
    public function shortcodeRecentlyViewed(array|string $atts): string
    {
        $s    = $this->settings();
        $atts = shortcode_atts(
            [
                'count'   => (int) $s['count'],
                'columns' => (int) $s['columns'],
                'heading' => (string) $s['recently_heading'],
            ],
            is_array($atts) ? $atts : [],
            'pair_recently_viewed',
        );

        $exclude = [];
        $product = $this->currentProduct();
        if ($product instanceof \WC_Product) {
            $exclude[] = $product->get_id();
        }

        $products = $this->recommender->recommend(
            'recently',
            [],
            max(1, min(12, (int) $atts['count'])),
            ! empty($s['in_stock_only']),
            $exclude,
        );

        return $this->capture($products, (string) $atts['heading'], (int) $atts['columns'], 'recently');
    }

    private function currentProduct(): ?\WC_Product
    {
        global $product;
        if ($product instanceof \WC_Product) {
            return $product;
        }
        $maybe = wc_get_product(get_the_ID());

        return $maybe instanceof \WC_Product ? $maybe : null;
    }

    /** @return array<int, int> */
    private function cartProductIds(): array
    {
        $ids = [];
        if (function_exists('WC') && WC()->cart) {
            foreach (WC()->cart->get_cart() as $item) {
                if (isset($item['product_id'])) {
                    $ids[] = (int) $item['product_id'];
                }
            }
        }

        return $ids;
    }

    /** @param array<int, \WC_Product> $products */
    private function capture(array $products, string $heading, int $columns, string $context): string
    {
        $this->enqueueAssets();
        ob_start();
        $this->render($products, $heading, $columns, $context);

        return (string) ob_get_clean();
    }

    /** @param array<int, \WC_Product> $products */
    private function render(array $products, string $heading, int $columns, string $context, bool $required = true): void
    {
        if ($products === []) {
            return;
        }

        $columns = max(1, min(6, $columns));
        $file    = PAIR_DIR . 'templates/recommendations.php';
        if (! is_readable($file)) {
            return;
        }

        require $file;
    }

    /** @return array<string, mixed> */
    private function settings(): array
    {
        $stored = get_option(Migrator::OPTION_SETTINGS, []);
        if (! is_array($stored)) {
            $stored = [];
        }

        /** @var array<string, mixed> $defaults */
        $defaults = require PAIR_DIR . 'config/defaults.php';

        return array_merge($defaults, $stored);
    }
}
