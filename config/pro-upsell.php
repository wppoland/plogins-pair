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
        'en' => 'Recommendations from real demand instead of categories alone, plus control over what shows where, and the numbers to tell whether it works.',
        'pl' => 'Rekomendacje z realnego popytu zamiast wyłącznie kategorii, plus kontrola nad tym, co i gdzie się pokazuje, i pomiar, czy to działa.',
    ],
    'features'   => [
        [
            'en' => ['title' => 'Frequently bought together', 'desc' => 'A product-page block of the items most often purchased in the same order, mined from completed and processing orders (bounded scan, 12h cache).'],
            'pl' => ['title' => 'Często kupowane razem', 'desc' => 'Blok na karcie produktu z produktami najczęściej kupowanymi w tym samym zamówieniu, liczony z zamówień zrealizowanych i w realizacji (skan ograniczony, cache 12h).'],
        ],
        [
            'en' => ['title' => 'Bundle discount', 'desc' => 'An optional "buy the whole set, save X%": once the set is in the cart the discount applies as a negative cart fee, and it drops off as soon as any product from the set leaves the cart.'],
            'pl' => ['title' => 'Rabat na cały zestaw', 'desc' => 'Opcjonalne „kup cały zestaw, oszczędź X%”: po dodaniu zestawu rabat wchodzi jako ujemna opłata koszyka i znika, gdy klient usunie z koszyka którykolwiek produkt z zestawu.'],
        ],
        [
            'en' => ['title' => 'Manual curation', 'desc' => 'Hand-pick the recommendations for a specific product instead of leaving it to the automatic picks. The selection is stored in product meta and leads the automatic results.'],
            'pl' => ['title' => 'Ręczny wybór rekomendacji', 'desc' => 'Dla wybranego produktu wskazujesz rekomendacje sam, zamiast zdawać się na automat. Wybór trafia do meta produktu i wchodzi przed automatycznymi propozycjami.'],
        ],
        [
            'en' => ['title' => 'Category rules', 'desc' => '"When a product is in category A, recommend from category B". Rules are set globally and lead the product-page block.'],
            'pl' => ['title' => 'Reguły kategorii', 'desc' => '„Gdy produkt jest w kategorii A, polecaj z kategorii B”. Reguły ustawiasz globalnie i prowadzą blok na karcie produktu.'],
        ],
        [
            'en' => ['title' => 'A/B testing', 'desc' => 'Each visitor gets a sticky variant (cookie): A keeps the default strategy, B swaps in another one, and the dashboard reports both side by side.'],
            'pl' => ['title' => 'Testy A/B', 'desc' => 'Wariant przypisany klientowi na stałe (ciasteczko): A zostaje przy domyślnej strategii, B podmienia ją na inną, a panel pokazuje oba warianty obok siebie.'],
        ],
        [
            'en' => ['title' => 'Recommendation analytics', 'desc' => 'Impressions, clicks and add-to-cart attributed to the clicked product, on their own screen. Attribution is click-based and approximate, a directional signal rather than revenue accounting.'],
            'pl' => ['title' => 'Analityka rekomendacji', 'desc' => 'Wyświetlenia, kliknięcia i dodania do koszyka przypisane do klikniętego produktu, zebrane na własnym ekranie. Atrybucja jest przybliżona, to sygnał kierunkowy, nie księgowanie przychodu.'],
        ],
    ],
];
