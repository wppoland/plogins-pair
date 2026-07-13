=== Pair - Product Recommendations for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, product recommendations, related products, recently viewed, cross-sell
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Automatic WooCommerce product recommendations: "You may also like", cart cross-sells and recently viewed. No manual setup, no layout shift.

== Description ==

Plogins Pair adds automatic product recommendations to your WooCommerce store, with no manual setup. It helps shoppers discover more of your catalog while they browse and check out, which lifts average order value and keeps people moving toward the cart.

Out of the box you get three blocks:

* **"You may also like"** after the product summary, so a shopper always has a next step.
* **Cross-sell suggestions on the cart**, based on what is already in it, to grow the order before checkout.
* **Recently viewed products**, so returning shoppers pick up where they left off.

Unlike WooCommerce's built-in upsells and cross-sells, which you have to pick by hand for every product, Pair generates recommendations for you and keeps them relevant as your catalog and sales change. You choose how products are picked with a simple strategy setting, and the grid is rendered with your theme's own product-card markup, so it matches the rest of your shop with no extra front-end JavaScript and no layout shift.

= Recommendation strategies =
For each block you pick how products are chosen:

* **Same category (by popularity)** - the default; other products from the same categories, ordered by total sales.
* **Shared tags** - products that share the item's tags.
* **Best sellers** - your top sellers, optionally within the same categories.
* **Newest products** - your most recent additions.
* **Recently viewed by the shopper** - the products this visitor looked at.

Every strategy falls back to recent products, so a block is never awkwardly empty.

= Built to be fast and friendly =
* Rendered with the active theme's product cards, so it looks native.
* No front-end JavaScript; recently viewed is stored in a first-party cookie (product IDs only, nothing sent anywhere).
* Queries are bounded by the number of products you choose.
* A clean, sectioned settings screen with inline help.
* Fully translatable, accessible headings and labels.

= Documentation and links =
* **Documentation** - https://plogins.com/plogins-pair/docs/
* **Plugin page** - https://plogins.com/plogins-pair/
* **Source code** - https://github.com/wppoland/plogins-pair
* **Bug reports and feature requests** - https://github.com/wppoland/plogins-pair/issues

= Features =
* Automatic "You may also like" block after the single product summary.
* Automatic cross-sell suggestions under the cart, based on its contents.
* Recently viewed products block, on product pages and/or the cart.
* Five selectable strategies per block (category, tags, best sellers, newest, recently viewed) with a recent-products fallback.
* Configurable number of products (1 to 12) and columns (1 to 6).
* Optional "in stock only" filter.
* Editable headings for every block.
* [pair_recommendations] and [pair_recently_viewed] shortcodes to place blocks anywhere.
* Theme-styled product cards, no custom front-end JavaScript, no layout shift.

= Shortcodes =
* `[pair_recommendations strategy="related" count="4" columns="4"]` - a recommendation block. On a product page it uses that product; elsewhere it uses the cart. `strategy` is optional (related, tags, bestsellers, newest, recently).
* `[pair_recently_viewed count="4" columns="4"]` - the shopper's recently viewed products.

== Installation ==

1. Install and activate WooCommerce.
2. Install Plogins Pair and activate it.
3. Open WooCommerce -> Pair recommendations. Sensible defaults are set on activation; turn blocks on or off, pick a strategy, and set headings.

== Frequently Asked Questions ==

= Does this require WooCommerce? =
Yes. The plugin works with WooCommerce products and shows nothing until WooCommerce is active.

= How are recommendations chosen? =
You pick a strategy per block: same category by popularity (default), shared tags, best sellers, newest, or the shopper's recently viewed products. If there are not enough matches, the block is topped up with recent products so it is never empty.

= Is this different from WooCommerce upsells and cross-sells? =
Yes. WooCommerce upsells and cross-sells are chosen manually for each product. Pair generates recommendations automatically from your catalog, so you do not have to curate them product by product.

= How does "recently viewed" work, and is it GDPR friendly? =
When a visitor opens a product, Pair stores that product's ID in a first-party cookie on their own device. It keeps only product IDs, holds no personal data, and never sends anything to an external service. The block simply shows those products again.

= Will it slow down my store or shift the layout? =
No. Blocks render with your theme's product-card markup and a small stylesheet, with no front-end JavaScript. Queries are bounded by your chosen product count.

= Can I control where the blocks appear? =
Yes. Turn the product-page, cart and recently-viewed blocks on or off independently, and use the shortcodes to place a block anywhere.

= Does this plugin work on WordPress Multisite? =

Yes. This plugin is compatible with WordPress Multisite. Network activate it or activate it on individual sites; each site keeps its own settings and data.

== Screenshots ==

1. The "You may also like" block on a product page.
2. Cross-sell suggestions under the cart.
3. The sectioned Pair recommendations settings screen.

== External Services ==

This plugin does not connect to any external services. Recommendations are computed on your own site from your WooCommerce catalog, and recently viewed products are stored only in a first-party cookie on the visitor's device.

== Translations ==

Plogins Pair includes Polish, German and Spanish translations for the plugin interface. The text domain is `plogins-pair`, so WordPress.org language packs can also override or extend these bundled translations.

== Changelog ==

= 1.0.2 =
* Added bundled Polish, German and Spanish translations for the plugin interface.

= 1.0.1 =
* First stable release.

= 0.1.0 =
* Initial release: automatic product-page, cart and recently-viewed blocks; five selectable strategies with a recent-products fallback; configurable count, columns, headings and in-stock filter; [pair_recommendations] and [pair_recently_viewed] shortcodes; sectioned settings screen with inline help.
