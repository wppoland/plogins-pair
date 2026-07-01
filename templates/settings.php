<?php
/**
 * Settings screen.
 *
 * @package Pair
 *
 * @var array<string, mixed>  $s
 * @var array<string, string> $strategies
 */

declare(strict_types=1);

defined('ABSPATH') || exit;

/** Render a strategy <select>. */
$pair_strategy_select = static function (string $name, string $current) use ($strategies): void {
    echo '<select name="pair_settings[' . esc_attr($name) . ']">';
    foreach ($strategies as $value => $label) {
        printf(
            '<option value="%s"%s>%s</option>',
            esc_attr($value),
            selected($current, $value, false),
            esc_html($label),
        );
    }
    echo '</select>';
};

/** A small help tooltip. */
$pair_help = static function (string $text): void {
    echo '<span class="pair-help" tabindex="0" aria-label="' . esc_attr($text) . '" data-pair-help="' . esc_attr($text) . '">?</span>';
};
?>
<div class="wrap pair-settings">
    <h1><span class="pair-logo" aria-hidden="true"></span> <?php echo esc_html__('Pair recommendations', 'pair'); ?></h1>
    <p class="pair-intro"><?php echo esc_html__('Automatic product recommendations. Blocks are rendered with your theme\'s product cards, so they match your shop. Pick where they appear and how the products are chosen.', 'pair'); ?></p>

    <form action="options.php" method="post">
        <?php settings_fields('pair-settings'); ?>

        <label class="pair-master">
            <input type="checkbox" name="pair_settings[enabled]" value="1" <?php checked(! empty($s['enabled'])); ?> />
            <span><?php echo esc_html__('Enable Pair on the storefront', 'pair'); ?></span>
        </label>

        <div class="pair-cards">

            <section class="pair-card" data-pair-section>
                <header>
                    <h2><?php echo esc_html__('Product page', 'pair'); ?></h2>
                    <label class="pair-switch">
                        <input type="checkbox" name="pair_settings[show_on_single]" value="1" data-pair-toggle="single" <?php checked(! empty($s['show_on_single'])); ?> />
                        <span><?php echo esc_html__('Show "You may also like"', 'pair'); ?></span>
                    </label>
                </header>
                <div class="pair-fields" data-pair-panel="single">
                    <p>
                        <label><?php echo esc_html__('How to choose products', 'pair'); ?></label>
                        <?php $pair_strategy_select('single_strategy', (string) $s['single_strategy']); ?>
                        <?php $pair_help(__('Related uses the product\'s categories, ordered by popularity. Others use tags, best sellers, newest, or what the shopper recently viewed.', 'pair')); ?>
                    </p>
                    <p>
                        <label for="pair_single_heading"><?php echo esc_html__('Heading', 'pair'); ?></label>
                        <input type="text" id="pair_single_heading" class="regular-text" name="pair_settings[single_heading]" value="<?php echo esc_attr((string) $s['single_heading']); ?>" />
                    </p>
                </div>
            </section>

            <section class="pair-card" data-pair-section>
                <header>
                    <h2><?php echo esc_html__('Cart', 'pair'); ?></h2>
                    <label class="pair-switch">
                        <input type="checkbox" name="pair_settings[show_on_cart]" value="1" data-pair-toggle="cart" <?php checked(! empty($s['show_on_cart'])); ?> />
                        <span><?php echo esc_html__('Show cross-sell suggestions', 'pair'); ?></span>
                    </label>
                </header>
                <div class="pair-fields" data-pair-panel="cart">
                    <p>
                        <label><?php echo esc_html__('How to choose products', 'pair'); ?></label>
                        <?php $pair_strategy_select('cart_strategy', (string) $s['cart_strategy']); ?>
                        <?php $pair_help(__('Based on the categories of the items already in the cart, excluding those items.', 'pair')); ?>
                    </p>
                    <p>
                        <label for="pair_cart_heading"><?php echo esc_html__('Heading', 'pair'); ?></label>
                        <input type="text" id="pair_cart_heading" class="regular-text" name="pair_settings[cart_heading]" value="<?php echo esc_attr((string) $s['cart_heading']); ?>" />
                    </p>
                </div>
            </section>

            <section class="pair-card" data-pair-section>
                <header>
                    <h2><?php echo esc_html__('Recently viewed', 'pair'); ?></h2>
                    <label class="pair-switch">
                        <input type="checkbox" name="pair_settings[show_recently_viewed]" value="1" data-pair-toggle="recently" <?php checked(! empty($s['show_recently_viewed'])); ?> />
                        <span><?php echo esc_html__('Show recently viewed products', 'pair'); ?></span>
                        <?php $pair_help(__('Tracks the products a visitor views in a first-party cookie (product IDs only) and shows them again. Nothing is sent anywhere.', 'pair')); ?>
                    </label>
                </header>
                <div class="pair-fields" data-pair-panel="recently">
                    <p>
                        <label><input type="checkbox" name="pair_settings[recently_on_single]" value="1" <?php checked(! empty($s['recently_on_single'])); ?> /> <?php echo esc_html__('On product pages', 'pair'); ?></label><br />
                        <label><input type="checkbox" name="pair_settings[recently_on_cart]" value="1" <?php checked(! empty($s['recently_on_cart'])); ?> /> <?php echo esc_html__('On the cart', 'pair'); ?></label>
                    </p>
                    <p>
                        <label for="pair_recently_heading"><?php echo esc_html__('Heading', 'pair'); ?></label>
                        <input type="text" id="pair_recently_heading" class="regular-text" name="pair_settings[recently_heading]" value="<?php echo esc_attr((string) $s['recently_heading']); ?>" />
                    </p>
                </div>
            </section>

            <section class="pair-card">
                <header><h2><?php echo esc_html__('Display', 'pair'); ?></h2></header>
                <div class="pair-fields">
                    <p>
                        <label for="pair_count"><?php echo esc_html__('Products per block', 'pair'); ?></label>
                        <input type="number" id="pair_count" name="pair_settings[count]" min="1" max="12" value="<?php echo esc_attr((string) (int) $s['count']); ?>" />
                    </p>
                    <p>
                        <label for="pair_columns"><?php echo esc_html__('Columns', 'pair'); ?></label>
                        <input type="number" id="pair_columns" name="pair_settings[columns]" min="1" max="6" value="<?php echo esc_attr((string) (int) $s['columns']); ?>" />
                    </p>
                    <p>
                        <label><input type="checkbox" name="pair_settings[in_stock_only]" value="1" <?php checked(! empty($s['in_stock_only'])); ?> /> <?php echo esc_html__('Only recommend products that are in stock', 'pair'); ?></label>
                    </p>
                </div>
            </section>

        </div>

        <?php submit_button(); ?>
    </form>

    <div class="pair-card pair-card--muted">
        <header><h2><?php echo esc_html__('Shortcodes', 'pair'); ?></h2></header>
        <div class="pair-fields">
            <p><?php echo esc_html__('Place a recommendation block anywhere:', 'pair'); ?> <code>[pair_recommendations strategy="related" count="4" columns="4"]</code></p>
            <p><?php echo esc_html__('Place a recently viewed block anywhere:', 'pair'); ?> <code>[pair_recently_viewed count="4"]</code></p>
        </div>
    </div>
</div>
