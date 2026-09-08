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

// The three headings are empty on purpose. They used to be __() calls here,
// and this file is required at activation and its result stored, so whatever
// locale the admin was in got frozen into the database. Empty means "use
// Pair\Service\Texts", resolved when the heading is shown.
return [
    'enabled'              => true,

    // Product page "You may also like".
    'show_on_single'       => true,
    'single_strategy'      => 'related',
    'single_heading'       => '',

    // Cart cross-sell suggestions.
    'show_on_cart'         => true,
    'cart_strategy'        => 'related',
    'cart_heading'         => '',

    // Recently viewed.
    'show_recently_viewed' => true,
    'recently_on_single'   => true,
    'recently_on_cart'     => false,
    'recently_heading'     => '',

    // Display.
    'count'                => 3,
    'columns'              => 3,
    'in_stock_only'        => true,
];
