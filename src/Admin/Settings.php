<?php

declare(strict_types=1);

namespace Pair\Admin;

use Pair\Contract\HasHooks;
use Pair\Migrator;

use const Pair\PAIR_DIR;

defined('ABSPATH') || exit;

/**
 * A single settings screen under the WooCommerce menu.
 */
final class Settings implements HasHooks
{
    private const PAGE   = 'pair-settings';
    private const OPTION = Migrator::OPTION_SETTINGS;

    public function registerHooks(): void
    {
        add_action('admin_menu', [$this, 'addMenuPage']);
        add_action('admin_init', [$this, 'registerSettings']);
    }

    public function addMenuPage(): void
    {
        add_submenu_page(
            'woocommerce',
            __('Pair recommendations', 'plogins-pair'),
            __('Pair recommendations', 'plogins-pair'),
            'manage_woocommerce',
            self::PAGE,
            [$this, 'renderPage'],
        );
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

        return [
            'enabled'        => ! empty($raw['enabled']),
            'show_on_single' => ! empty($raw['show_on_single']),
            'show_on_cart'   => ! empty($raw['show_on_cart']),
            'in_stock_only'  => ! empty($raw['in_stock_only']),
            'count'          => max(1, min(12, isset($raw['count']) ? (int) $raw['count'] : 3)),
            'columns'        => max(1, min(6, isset($raw['columns']) ? (int) $raw['columns'] : 3)),
            'heading_single' => isset($raw['heading_single']) ? sanitize_text_field((string) $raw['heading_single']) : '',
            'heading_cart'   => isset($raw['heading_cart']) ? sanitize_text_field((string) $raw['heading_cart']) : '',
        ];
    }

    public function renderPage(): void
    {
        if (! current_user_can('manage_woocommerce')) {
            return;
        }

        $s = $this->settings();

        require PAIR_DIR . 'templates/settings.php';
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
