<?php
/**
 * Regression: the "Recently viewed" block must list only products the shopper
 * viewed. Up to 1.1.6 it was topped up with the newest products, so a first
 * visit showed a "Recently viewed" row of products nobody had opened.
 *
 * Run inside a site with WooCommerce and at least 3 published products:
 *   wp eval-file tests/recently-viewed-no-fallback.php
 *
 * @package Pair
 */


$pair_ids = wc_get_products(['status' => 'publish', 'limit' => 3, 'return' => 'ids', 'visibility' => 'catalog']);
if (count($pair_ids) < 3) {
    fwrite(STDERR, "SKIP: needs 3 published products\n");
    exit(0);
}

$pair_service = Pair\Plugin::instance()->container()->get(Pair\Service\RecommendationsService::class);
$pair_fail    = 0;

// One viewed product, then the product page of another: only the viewed one may show.
$_COOKIE[Pair\Service\Tracker::COOKIE] = (string) $pair_ids[0];
$pair_html = $pair_service->shortcodeRecentlyViewed(['count' => '6']);
$pair_cards = substr_count($pair_html, 'woocommerce-loop-product__title');
if ($pair_cards !== 1) {
    fwrite(STDERR, "FAIL: one viewed product rendered {$pair_cards} cards\n");
    $pair_fail = 1;
}

// Nothing viewed: no block at all.
unset($_COOKIE[Pair\Service\Tracker::COOKIE]);
if (trim($pair_service->shortcodeRecentlyViewed([])) !== '') {
    fwrite(STDERR, "FAIL: first-time visitor got a Recently viewed block\n");
    $pair_fail = 1;
}

// The recommendation block keeps its fallback.
$pair_recs = Pair\Plugin::instance()->container()->get(Pair\Service\Recommender::class)->recommend('recently', [], 3, false);
if (count($pair_recs) !== 3) {
    fwrite(STDERR, "FAIL: recommendation fallback lost, got " . count($pair_recs) . "\n");
    $pair_fail = 1;
}

echo $pair_fail ? "recently-viewed-no-fallback: FAIL\n" : "recently-viewed-no-fallback: OK\n";
exit($pair_fail);
