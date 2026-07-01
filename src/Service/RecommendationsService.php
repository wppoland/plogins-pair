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
 * Renders the recommendation blocks on the storefront: a "You may also like"
 * grid after the single product summary, and a cross-sell grid on the cart.
 */
final class RecommendationsService implements HasHooks
{
    public function __construct(private readonly Recommender $recommender)
    {
    }

    public function registerHooks(): void
    {
        $settings = $this->settings();

        if (empty($settings['enabled'])) {
            return;
        }

        add_action('wp_enqueue_scripts', [$this, 'enqueueAssets']);
        add_shortcode('pair_recommendations', [$this, 'shortcode']);

        if (! empty($settings['show_on_single'])) {
            add_action('woocommerce_after_single_product_summary', [$this, 'renderSingle'], 15);
        }

        if (! empty($settings['show_on_cart'])) {
            add_action('woocommerce_after_cart', [$this, 'renderCart']);
        }
    }

    public function enqueueAssets(): void
    {
        wp_register_style('pair', PAIR_URL . 'assets/css/pair.css', [], VERSION);
        wp_enqueue_style('pair');
    }

    public function renderSingle(): void
    {
        global $product;

        $wcProduct = $product instanceof \WC_Product ? $product : wc_get_product(get_the_ID());
        if (! $wcProduct instanceof \WC_Product) {
            return;
        }

        $settings = $this->settings();
        $products = $this->recommender->forProduct(
            $wcProduct,
            (int) $settings['count'],
            ! empty($settings['in_stock_only']),
        );

        $this->render(
            $products,
            (string) ($settings['heading_single'] ?? ''),
            (int) $settings['columns'],
        );
    }

    public function renderCart(): void
    {
        if (! function_exists('WC') || ! WC()->cart) {
            return;
        }

        $cartIds = [];
        foreach (WC()->cart->get_cart() as $item) {
            if (isset($item['product_id'])) {
                $cartIds[] = (int) $item['product_id'];
            }
        }

        $settings = $this->settings();
        $products = $this->recommender->forCart(
            $cartIds,
            (int) $settings['count'],
            ! empty($settings['in_stock_only']),
        );

        $this->render(
            $products,
            (string) ($settings['heading_cart'] ?? ''),
            (int) $settings['columns'],
        );
    }

    /**
     * `[pair_recommendations count="4" columns="4"]` renders recommendations for
     * the current product (on a product page) or the cart contents elsewhere.
     *
     * @param array<string, mixed>|string $atts
     */
    public function shortcode(array|string $atts): string
    {
        $settings = $this->settings();
        $atts     = shortcode_atts(
            [
                'count'   => (int) $settings['count'],
                'columns' => (int) $settings['columns'],
                'heading' => (string) ($settings['heading_single'] ?? ''),
            ],
            is_array($atts) ? $atts : [],
            'pair_recommendations',
        );

        $count   = max(1, min(12, (int) $atts['count']));
        $columns = max(1, min(6, (int) $atts['columns']));
        $inStock = ! empty($settings['in_stock_only']);

        $current = wc_get_product(get_the_ID());
        if ($current instanceof \WC_Product) {
            $products = $this->recommender->forProduct($current, $count, $inStock);
        } else {
            $cartIds = [];
            if (function_exists('WC') && WC()->cart) {
                foreach (WC()->cart->get_cart() as $item) {
                    if (isset($item['product_id'])) {
                        $cartIds[] = (int) $item['product_id'];
                    }
                }
            }
            $products = $this->recommender->forCart($cartIds, $count, $inStock);
        }

        $this->enqueueAssets();

        ob_start();
        $this->render($products, (string) $atts['heading'], $columns);

        return (string) ob_get_clean();
    }

    /**
     * @param array<int, \WC_Product> $products
     */
    private function render(array $products, string $heading, int $columns): void
    {
        if ($products === []) {
            return;
        }

        $columns = max(1, min(6, $columns));

        $file = PAIR_DIR . 'templates/recommendations.php';
        if (! is_readable($file)) {
            return;
        }

        require $file;
    }

    /**
     * @return array<string, mixed>
     */
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
