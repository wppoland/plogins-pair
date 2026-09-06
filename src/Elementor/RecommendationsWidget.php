<?php

/**
 * Elementor widget: Product Recommendations.
 *
 * A thin wrapper around the [pair_recommendations] shortcode so the "You may
 * also like" grid can be placed with the Elementor editor. Kept deliberately
 * minimal (renders the shortcode) so a future migration to Elementor v4 atomic
 * widgets is localised to this class. Loaded only from the
 * `elementor/widgets/register` hook, so the `\Elementor\Widget_Base` base class
 * is guaranteed to exist here. Works on Elementor 3.x and 4.0.
 *
 * @package Pair
 */

declare(strict_types=1);

namespace Pair\Elementor;

use Elementor\Controls_Manager;
use Elementor\Widget_Base;

defined('ABSPATH') || exit;

/**
 * Product Recommendations Elementor widget.
 */
final class RecommendationsWidget extends Widget_Base
{
    /**
     * Widget machine name (matches the shortcode tag).
     */
    public function get_name(): string
    {
        return 'pair_recommendations';
    }

    /**
     * Widget label shown in the editor.
     */
    public function get_title(): string
    {
        return esc_html__('Product Recommendations', 'plogins-pair');
    }

    /**
     * Editor panel icon.
     */
    public function get_icon(): string
    {
        return 'eicon-products';
    }

    /**
     * Editor panel categories.
     *
     * @return string[]
     */
    public function get_categories(): array
    {
        return ['woocommerce-elements', 'general'];
    }

    /**
     * Search keywords in the editor.
     *
     * @return string[]
     */
    public function get_keywords(): array
    {
        return ['pair', 'recommendations', 'related', 'cross-sell', 'upsell', 'woocommerce'];
    }

    /**
     * Register the editor controls.
     */
    protected function register_controls(): void
    {
        $this->start_controls_section(
            'content',
            ['label' => esc_html__('Recommendations', 'plogins-pair')]
        );

        $this->add_control(
            'heading',
            [
                'label'       => esc_html__('Heading', 'plogins-pair'),
                'type'        => Controls_Manager::TEXT,
                'default'     => '',
                'placeholder' => esc_html__('Leave empty to use the plugin default.', 'plogins-pair'),
            ]
        );

        $this->add_control(
            'count',
            [
                'label'   => esc_html__('Number of products', 'plogins-pair'),
                'type'    => Controls_Manager::NUMBER,
                'default' => 4,
                'min'     => 1,
                'max'     => 12,
            ]
        );

        $this->add_control(
            'columns',
            [
                'label'   => esc_html__('Columns', 'plogins-pair'),
                'type'    => Controls_Manager::NUMBER,
                'default' => 4,
                'min'     => 1,
                'max'     => 6,
            ]
        );

        $this->end_controls_section();
    }

    /**
     * Render the widget on the front end and in the editor preview.
     */
    protected function render(): void
    {
        $settings = $this->get_settings_for_display();
        $heading  = isset($settings['heading']) ? (string) $settings['heading'] : '';
        $count    = isset($settings['count']) ? absint($settings['count']) : 0;
        $columns  = isset($settings['columns']) ? absint($settings['columns']) : 0;

        $shortcode = '[pair_recommendations';
        if ($count > 0) {
            $shortcode .= sprintf(' count="%d"', $count);
        }
        if ($columns > 0) {
            $shortcode .= sprintf(' columns="%d"', $columns);
        }
        if ($heading !== '') {
            $shortcode .= sprintf(' heading="%s"', esc_attr($heading));
        }
        $shortcode .= ']';

        echo do_shortcode($shortcode);
    }
}
