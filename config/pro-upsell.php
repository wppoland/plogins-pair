<?php
/**
 * PRO upsell content, generated from the plogins.com registry by
 * scripts/gen-pro-upsell.mjs. The admin upsell renders this; curate the
 * feature list to fit this plugin's settings screen (do not invent features).
 *
 * @package plogins-pair-pro
 */

defined('ABSPATH') || exit;

return [
    'name'       => 'Pair PRO',
    'url'        => 'https://plogins.com/plogins-pair-pro/pricing/',
    'sellable'   => false,
    'price_from' => 29,
    'currency'   => 'EUR',
    'price_pln'  => 129,
    'lead'       => [
        'en' => 'Recommendations from real demand instead of categories alone, plus a faster path to the cart.',
        'pl' => 'Rekomendacje z realnego popytu zamiast wyłącznie kategorii, plus szybsza ścieżka do koszyka.',
    ],
    'features'   => [
        [
            'en' => ['title' => 'Frequently bought together', 'desc' => 'A product-page block of the items most often purchased in the same order, mined from completed and processing orders (bounded scan, 12h cache).'],
            'pl' => ['title' => 'Często kupowane razem', 'desc' => 'Blok na karcie produktu z produktami najczęściej kupowanymi w tym samym zamówieniu, liczony z zamówień zrealizowanych i w realizacji (skan ograniczony, cache 12h).'],
        ],
        [
            'en' => ['title' => 'Add all to cart', 'desc' => 'One button adds the whole set to the cart. Plain nonce-protected form, no JavaScript dependency.'],
            'pl' => ['title' => 'Dodaj wszystko do koszyka', 'desc' => 'Jeden przycisk dodaje cały zestaw do koszyka. Zwykły formularz z nonce, bez zależności od JavaScript.'],
        ],
        [
            'en' => ['title' => 'Performance and HPOS safe', 'desc' => 'Reads orders through the WooCommerce order API (HPOS-compatible), a bounded scan of recent orders, and a cached result.'],
            'pl' => ['title' => 'Bezpieczne dla wydajności i HPOS', 'desc' => 'Odczyt zamówień przez API WooCommerce (zgodne z HPOS), ograniczony skan ostatnich zamówień i wynik z cache.'],
        ],
        [
            'en' => ['title' => 'Settings', 'desc' => 'WooCommerce → Pair Pro: enable, heading, product count, columns, the add-all button, and how many orders to analyse.'],
            'pl' => ['title' => 'Ustawienia', 'desc' => 'WooCommerce → Pair Pro: włączanie, nagłówek, liczba produktów, kolumny, przycisk dodania wszystkiego i liczba analizowanych zamówień.'],
        ],
    ],
];
