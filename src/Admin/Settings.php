<?php

declare(strict_types=1);

namespace Pair\Admin;

use Pair\Contract\HasHooks;
use Pair\Migrator;
use Pair\Service\Recommender;

use const Pair\PAIR_DIR;
use const Pair\PAIR_URL;
use const Pair\VERSION;

defined('ABSPATH') || exit;

/**
 * A single, sectioned settings screen under the WooCommerce menu, with inline
 * help and fields that reveal themselves as you enable each block.
 */
final class Settings implements HasHooks
{
    private const PAGE   = 'pair-settings';
    private const OPTION = Migrator::OPTION_SETTINGS;

    /** @var array<int, string> */
    private const STRATEGIES = Recommender::STRATEGIES;

    public function registerHooks(): void
    {
        add_action('admin_menu', [$this, 'addMenuPage']);
        add_action('admin_init', [$this, 'registerSettings']);
        add_action('admin_enqueue_scripts', [$this, 'enqueueAssets']);
    }

    public function addMenuPage(): void
    {
        add_submenu_page(
            'woocommerce',
            __('Pair recommendations', 'pair'),
            __('Pair recommendations', 'pair'),
            'manage_woocommerce',
            self::PAGE,
            [$this, 'renderPage'],
        );
    }

    public function enqueueAssets(string $hook): void
    {
        if ($hook !== 'woocommerce_page_' . self::PAGE) {
            return;
        }

        wp_enqueue_style('pair-admin', PAIR_URL . 'assets/css/admin.css', [], VERSION);
        wp_enqueue_script('pair-admin', PAIR_URL . 'assets/js/admin.js', [], VERSION, true);
    }

    public function registerSettings(): void
    {
        register_setting(
            self::PAGE,
            self::OPTION,
            [
                'type'              => 'array',
                'sanitize_callback' => [$this, 'sanitize'],
            ],
        );

        add_filter(
            'option_page_capability_' . self::PAGE,
            static fn (): string => 'manage_woocommerce',
        );
    }

    /**
     * @param mixed $raw
     * @return array<string, mixed>
     */
    public function sanitize(mixed $raw): array
    {
        if (! is_array($raw)) {
            $raw = [];
        }

        $strategy = static function (mixed $value): string {
            $value = is_string($value) ? sanitize_key($value) : 'related';

            return in_array($value, self::STRATEGIES, true) ? $value : 'related';
        };

        $text = static fn (mixed $value): string => isset($value) ? sanitize_text_field((string) $value) : '';

        return [
            'enabled'              => ! empty($raw['enabled']),
            'show_on_single'       => ! empty($raw['show_on_single']),
            'single_strategy'      => $strategy($raw['single_strategy'] ?? 'related'),
            'single_heading'       => $text($raw['single_heading'] ?? ''),
            'show_on_cart'         => ! empty($raw['show_on_cart']),
            'cart_strategy'        => $strategy($raw['cart_strategy'] ?? 'related'),
            'cart_heading'         => $text($raw['cart_heading'] ?? ''),
            'show_recently_viewed' => ! empty($raw['show_recently_viewed']),
            'recently_on_single'   => ! empty($raw['recently_on_single']),
            'recently_on_cart'     => ! empty($raw['recently_on_cart']),
            'recently_heading'     => $text($raw['recently_heading'] ?? ''),
            'count'                => max(1, min(12, isset($raw['count']) ? (int) $raw['count'] : 3)),
            'columns'              => max(1, min(6, isset($raw['columns']) ? (int) $raw['columns'] : 3)),
            'in_stock_only'        => ! empty($raw['in_stock_only']),
        ];
    }

    public function renderPage(): void
    {
        if (! current_user_can('manage_woocommerce')) {
            return;
        }

        $s          = $this->settings();
        $strategies = $this->strategyLabels();

        require PAIR_DIR . 'templates/settings.php';
    }

    /**
     * Human labels for the strategy select.
     *
     * @return array<string, string>
     */
    private function strategyLabels(): array
    {
        return [
            'related'     => __('Same category (by popularity)', 'pair'),
            'tags'        => __('Shared tags', 'pair'),
            'bestsellers' => __('Best sellers', 'pair'),
            'newest'      => __('Newest products', 'pair'),
            'recently'    => __('Recently viewed by the shopper', 'pair'),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function settings(): array
    {
        $stored = get_option(self::OPTION, []);
        if (! is_array($stored)) {
            $stored = [];
        }

        /** @var array<string, mixed> $defaults */
        $defaults = require PAIR_DIR . 'config/defaults.php';

        return array_merge($defaults, $stored);
    }
}
