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
    'enabled'        => true,
    'show_on_single' => true,
    'show_on_cart'   => true,
    'in_stock_only'  => true,
    'count'          => 3,
    'columns'        => 3,
    'heading_single' => __('You may also like', 'plogins-pair'),
    'heading_cart'   => __('Add these to your order', 'plogins-pair'),
];
