<?php

declare(strict_types=1);

namespace Pair\Service;

defined('ABSPATH') || exit;

/**
 * Computes product recommendations from WooCommerce data at request time.
 *
 * Strategies (FREE):
 *   related      - products sharing the seed's categories, by popularity
 *   tags         - products sharing the seed's tags, by popularity
 *   bestsellers  - top sellers (optionally within the seed's categories)
 *   newest       - most recently published products
 *   recently     - products the visitor recently viewed
 *
 * Every strategy falls back to recent products so a block is never empty. No
 * custom tables and no order-history mining (that is PRO territory).
 */
final class Recommender
{
    public const STRATEGIES = ['related', 'tags', 'bestsellers', 'newest', 'recently'];

    public function __construct(private readonly Tracker $tracker)
    {
    }

    /**
     * @param array<int, int> $seedIds   product(s) driving the recommendation (viewed product, or cart items)
     * @param array<int, int> $excludeIds
     * @return array<int, \WC_Product>
     */
    public function recommend(string $strategy, array $seedIds, int $limit, bool $inStockOnly, array $excludeIds = []): array
    {
        $limit   = max(1, min(12, $limit));
        $strategy = in_array($strategy, self::STRATEGIES, true) ? $strategy : 'related';
        $exclude = array_values(array_unique(array_map('intval', array_merge($seedIds, $excludeIds))));

        $products = match ($strategy) {
            'recently'    => $this->recentlyViewed($limit, $inStockOnly, $exclude),
            'newest'      => $this->byQuery([], $exclude, $limit, $inStockOnly, 'date'),
            'bestsellers' => $this->byQuery($this->categoryIds($seedIds), $exclude, $limit, $inStockOnly, 'popularity'),
            'tags'        => $this->byTerms('product_tag', $this->termIds($seedIds, 'product_tag'), $exclude, $limit, $inStockOnly),
            default       => $this->byTerms('product_cat', $this->categoryIds($seedIds), $exclude, $limit, $inStockOnly),
        };

        if (count($products) < $limit) {
            $products = array_merge(
                $products,
                $this->byQuery(
                    [],
                    array_merge($exclude, array_map(static fn (\WC_Product $p): int => $p->get_id(), $products)),
                    $limit - count($products),
                    $inStockOnly,
                    'date',
                ),
            );
        }

        return array_values($products);
    }

    /**
     * @param array<int, int> $exclude
     * @return array<int, \WC_Product>
     */
    private function recentlyViewed(int $limit, bool $inStockOnly, array $exclude): array
    {
        $ids = array_values(array_diff($this->tracker->ids(), $exclude));
        if ($ids === []) {
            return [];
        }

        $ids = array_slice($ids, 0, $limit);

        $products = wc_get_products([
            'status'       => 'publish',
            'include'      => $ids,
            'orderby'      => 'include',
            'limit'        => $limit,
            'stock_status' => $inStockOnly ? 'instock' : '',
            'visibility'   => 'catalog',
            'return'       => 'objects',
        ]);

        return is_array($products) ? $products : [];
    }

    /**
     * @param array<int, int> $termIds
     * @param array<int, int> $exclude
     * @return array<int, \WC_Product>
     */
    private function byTerms(string $taxonomy, array $termIds, array $exclude, int $limit, bool $inStockOnly): array
    {
        if ($termIds === []) {
            return [];
        }

        return $this->byQuery($termIds, $exclude, $limit, $inStockOnly, 'popularity', $taxonomy);
    }

    /**
     * @param array<int, int> $termIds    when non-empty, restrict to these taxonomy terms
     * @param array<int, int> $exclude
     * @return array<int, \WC_Product>
     */
    private function byQuery(array $termIds, array $exclude, int $limit, bool $inStockOnly, string $orderby, string $taxonomy = 'product_cat'): array
    {
        if ($limit < 1) {
            return [];
        }

        $args = [
            'status'     => 'publish',
            'limit'      => $limit,
            'exclude'    => array_values(array_unique(array_map('intval', $exclude))),
            'visibility' => 'catalog',
            'return'     => 'objects',
        ];

        if ($orderby === 'popularity') {
            $args['orderby']  = 'meta_value_num';
            $args['meta_key'] = 'total_sales'; // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key -- popularity sort, bounded by limit.
            $args['order']    = 'DESC';
        } else {
            $args['orderby'] = 'date';
            $args['order']   = 'DESC';
        }

        if ($termIds !== []) {
            $args['tax_query'] = [ // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_tax_query -- bounded by limit.
                [
                    'taxonomy' => $taxonomy,
                    'field'    => 'term_id',
                    'terms'    => $termIds,
                ],
            ];
        }

        if ($inStockOnly) {
            $args['stock_status'] = 'instock';
        }

        $products = wc_get_products($args);

        return is_array($products) ? $products : [];
    }

    /**
     * @param array<int, int> $productIds
     * @return array<int, int>
     */
    private function categoryIds(array $productIds): array
    {
        return $this->termIds($productIds, 'product_cat');
    }

    /**
     * @param array<int, int> $productIds
     * @return array<int, int>
     */
    private function termIds(array $productIds, string $taxonomy): array
    {
        $ids = [];
        foreach ($productIds as $productId) {
            $terms = wc_get_product_term_ids((int) $productId, $taxonomy);
            if (is_array($terms)) {
                foreach ($terms as $termId) {
                    $ids[(int) $termId] = (int) $termId;
                }
            }
        }

        return array_values($ids);
    }
}
