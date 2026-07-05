<?php

/**
 * Elementor integration service.
 *
 * Registers the Pair Elementor widgets. The `elementor/widgets/register` action
 * only fires when Elementor is active, so this service is self-guarding:
 * nothing loads unless Elementor is present. Compatible with Elementor 3.x and
 * 4.0 (classic \Elementor\Widget_Base API).
 *
 * @package Pair
 */

declare(strict_types=1);

namespace Pair\Service;

use Pair\Contract\HasHooks;
use Pair\Elementor\RecentlyViewedWidget;
use Pair\Elementor\RecommendationsWidget;

defined('ABSPATH') || exit;

/**
 * Wires the Pair widgets into the Elementor editor.
 */
final class ElementorWidgets implements HasHooks
{
    public function registerHooks(): void
    {
        add_action('elementor/widgets/register', [$this, 'register']);
    }

    /**
     * Register widget instances with Elementor's widgets manager.
     *
     * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
     */
    public function register($widgets_manager): void
    {
        // Loaded here (not autoloaded) so \Elementor\Widget_Base always exists.
        require_once __DIR__ . '/../Elementor/RecommendationsWidget.php';
        require_once __DIR__ . '/../Elementor/RecentlyViewedWidget.php';

        $widgets_manager->register(new RecommendationsWidget());
        $widgets_manager->register(new RecentlyViewedWidget());
    }
}
