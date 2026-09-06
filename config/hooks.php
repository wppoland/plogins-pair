<?php
/**
 * Boot order: services listed here are resolved from the container and have
 * their registerHooks() called during Plugin::boot(). Each must implement
 * Pair\Contract\HasHooks.
 *
 * @package Pair
 *
 * @return array<class-string>
 */

declare(strict_types=1);

use Pair\Admin\Settings;
use Pair\Service\ElementorWidgets;
use Pair\Service\RecommendationsService;
use Pair\Service\Tracker;

defined('ABSPATH') || exit;

return is_admin()
    ? [
        RecommendationsService::class,
        ElementorWidgets::class,
        Settings::class,
    ]
    : [
        Tracker::class,
        RecommendationsService::class,
        ElementorWidgets::class,
    ];
