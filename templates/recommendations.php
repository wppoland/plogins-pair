<?php
/**
 * Recommendation grid. Rendered via WooCommerce's own product loop so it
 * inherits the active theme's product-card styling (image, title, price,
 * add-to-cart), with no custom JavaScript.
 *
 * @package Pair
 *
 * @var array<int, \WC_Product> $products
 * @var string                  $heading
 * @var int                     $columns
 * @var string                  $context  one of: single, cart, recently
 */

declare(strict_types=1);

defined('ABSPATH') || exit;

if (! isset($products) || ! is_array($products) || $products === []) {
    return;
}

$pair_context = isset($context) && is_string($context) ? sanitize_html_class($context) : 'single';

wc_set_loop_prop('columns', (int) $columns);
?>
<section class="pair-recommendations pair-recommendations--<?php echo esc_attr($pair_context); ?>" aria-label="<?php echo esc_attr($heading !== '' ? $heading : __('Recommended products', 'pair')); ?>">
    <?php if ($heading !== '') : ?>
        <h2 class="pair-recommendations__title"><?php echo esc_html($heading); ?></h2>
    <?php endif; ?>
    <?php
    woocommerce_product_loop_start();

    foreach ($products as $pair_product) {
        if (! $pair_product instanceof \WC_Product) {
            continue;
        }

        $pair_post = get_post($pair_product->get_id());
        if (! $pair_post) {
            continue;
        }

        $GLOBALS['post'] = $pair_post; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited -- required for the WooCommerce loop template.
        setup_postdata($GLOBALS['post']);

        wc_get_template_part('content', 'product');
    }

    woocommerce_product_loop_end();
    wp_reset_postdata();
    ?>
</section>
