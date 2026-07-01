<?php
/**
 * Default settings, merged under any stored option.
 *
 * @package Pair
 *
 * @return array<string, mixed>
 */

declare(strict_types=1);

defined('ABSPATH') || exit;

return [
    'enabled'              => true,

    // Product page "You may also like".
    'show_on_single'       => true,
    'single_strategy'      => 'related',
    'single_heading'       => __('You may also like', 'plogins-pair'),

    // Cart cross-sell suggestions.
    'show_on_cart'         => true,
    'cart_strategy'        => 'related',
    'cart_heading'         => __('Add these to your order', 'plogins-pair'),

    // Recently viewed.
    'show_recently_viewed' => true,
    'recently_on_single'   => true,
    'recently_on_cart'     => false,
    'recently_heading'     => __('Recently viewed', 'plogins-pair'),

    // Display.
    'count'                => 3,
    'columns'              => 3,
    'in_stock_only'        => true,
];
