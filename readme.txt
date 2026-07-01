=== Plogins Pair - Product Recommendations for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, product recommendations, related products, cross-sell, upsell
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 0.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Automatic product recommendations for WooCommerce: a "You may also like" block on the product page and cross-sell suggestions in the cart.

== Description ==

Plogins Pair adds automatic product recommendations to your WooCommerce store, with no manual setup. It shows a "You may also like" block after the product summary and cross-sell suggestions under the cart, so shoppers discover more of your catalog while they browse and check out.

Unlike WooCommerce's built-in upsells and cross-sells, which you have to pick by hand for every product, Pair generates recommendations for you. It looks at the categories of the product being viewed (or the items already in the cart), then suggests other products from those categories ordered by popularity, so the blocks stay relevant as your catalog changes.

The recommendation grid is rendered with your theme's own product-card markup, so it matches the rest of your shop, with no extra JavaScript and no layout shift.

= Documentation and links =
* **Documentation** - https://plogins.com/plogins-pair/docs/
* **Plugin page** - https://plogins.com/plogins-pair/
* **Source code** - https://github.com/wppoland/plogins-pair
* **Bug reports and feature requests** - https://github.com/wppoland/plogins-pair/issues

= Features =
* Automatic "You may also like" block after the single product summary.
* Automatic cross-sell suggestions under the cart, based on what is already in it.
* Recommendations picked from shared categories, ordered by popularity, with a recent-products fallback so the block is never empty.
* Configurable number of products (1 to 12) and columns (1 to 6).
* Optional "in stock only" filter.
* Editable headings for the product page and the cart.
* A [pair_recommendations] shortcode to place a block anywhere.
* Theme-styled product cards, no custom JavaScript, no layout shift.

= The [pair_recommendations] shortcode =
Place `[pair_recommendations]` anywhere to render a recommendation block. On a product page it recommends products related to that product; elsewhere it uses the cart contents. Optional attributes: `count` (1 to 12) and `columns` (1 to 6), for example `[pair_recommendations count="4" columns="4"]`.

== Installation ==

1. Install and activate WooCommerce.
2. Install Plogins Pair and activate it.
3. Open WooCommerce -> Pair recommendations to choose placements, the number of products and the headings. Sensible defaults are set on activation.

== Frequently Asked Questions ==

= Does this require WooCommerce? =
Yes. The plugin works with WooCommerce products and shows nothing until WooCommerce is active.

= How are recommendations chosen? =
Pair looks at the categories of the product being viewed, or the items in the cart, and suggests other products from those categories ordered by total sales (popularity). If there are not enough matches, it fills the block with recent products so it is never empty.

= Is this different from WooCommerce upsells and cross-sells? =
Yes. WooCommerce upsells and cross-sells are chosen manually for each product. Pair generates recommendations automatically from your catalog, so you do not have to curate them product by product.

= Will it slow down my store or shift the layout? =
No. Blocks render with your theme's product-card markup and a small stylesheet, with no custom JavaScript. Queries are bounded by your chosen product count.

= Can I control where the blocks appear? =
Yes. You can turn the product-page block and the cart block on or off independently, and use the [pair_recommendations] shortcode to place a block anywhere.

= Does this plugin work on WordPress Multisite? =

Yes. This plugin is compatible with WordPress Multisite. Network activate it or activate it on individual sites; each site keeps its own settings and data.

== Screenshots ==

1. The "You may also like" block on a product page.
2. Cross-sell suggestions under the cart.
3. The Pair recommendations settings screen.

== External Services ==

This plugin does not connect to any external services. Recommendations are computed on your own site from your WooCommerce catalog.

== Changelog ==

= 0.1.0 =
* Initial release: automatic product-page and cart recommendations, configurable count, columns, headings and in-stock filter, plus the [pair_recommendations] shortcode.
