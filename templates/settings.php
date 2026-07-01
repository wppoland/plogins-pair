<?php
/**
 * Settings screen.
 *
 * @package Pair
 *
 * @var array<string, mixed> $s
 */

declare(strict_types=1);

defined('ABSPATH') || exit;
?>
<div class="wrap">
    <h1><?php echo esc_html__('Pair recommendations', 'plogins-pair'); ?></h1>
    <p><?php echo esc_html__('Automatic product recommendations. A "You may also like" block appears after the product summary, and cross-sell suggestions appear under the cart. Products are picked from the same categories, ordered by popularity.', 'plogins-pair'); ?></p>

    <form action="options.php" method="post">
        <?php settings_fields('pair-settings'); ?>
        <table class="form-table" role="presentation">
            <tr>
                <th scope="row"><?php echo esc_html__('Enable recommendations', 'plogins-pair'); ?></th>
                <td>
                    <label><input type="checkbox" name="pair_settings[enabled]" value="1" <?php checked(! empty($s['enabled'])); ?> /> <?php echo esc_html__('Show recommendation blocks on the storefront', 'plogins-pair'); ?></label>
                </td>
            </tr>
            <tr>
                <th scope="row"><?php echo esc_html__('Placements', 'plogins-pair'); ?></th>
                <td>
                    <label><input type="checkbox" name="pair_settings[show_on_single]" value="1" <?php checked(! empty($s['show_on_single'])); ?> /> <?php echo esc_html__('On the single product page', 'plogins-pair'); ?></label><br />
                    <label><input type="checkbox" name="pair_settings[show_on_cart]" value="1" <?php checked(! empty($s['show_on_cart'])); ?> /> <?php echo esc_html__('Under the cart', 'plogins-pair'); ?></label><br />
                    <label><input type="checkbox" name="pair_settings[in_stock_only]" value="1" <?php checked(! empty($s['in_stock_only'])); ?> /> <?php echo esc_html__('Only recommend products that are in stock', 'plogins-pair'); ?></label>
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="pair_count"><?php echo esc_html__('Number of products', 'plogins-pair'); ?></label></th>
                <td><input type="number" id="pair_count" name="pair_settings[count]" min="1" max="12" value="<?php echo esc_attr((string) (int) $s['count']); ?>" /></td>
            </tr>
            <tr>
                <th scope="row"><label for="pair_columns"><?php echo esc_html__('Columns', 'plogins-pair'); ?></label></th>
                <td><input type="number" id="pair_columns" name="pair_settings[columns]" min="1" max="6" value="<?php echo esc_attr((string) (int) $s['columns']); ?>" /></td>
            </tr>
            <tr>
                <th scope="row"><label for="pair_heading_single"><?php echo esc_html__('Product-page heading', 'plogins-pair'); ?></label></th>
                <td><input type="text" id="pair_heading_single" class="regular-text" name="pair_settings[heading_single]" value="<?php echo esc_attr((string) $s['heading_single']); ?>" /></td>
            </tr>
            <tr>
                <th scope="row"><label for="pair_heading_cart"><?php echo esc_html__('Cart heading', 'plogins-pair'); ?></label></th>
                <td><input type="text" id="pair_heading_cart" class="regular-text" name="pair_settings[heading_cart]" value="<?php echo esc_attr((string) $s['heading_cart']); ?>" /></td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>

    <p><?php echo esc_html__('Tip: you can also place a block anywhere with the shortcode', 'plogins-pair'); ?> <code>[pair_recommendations]</code>.</p>
</div>
