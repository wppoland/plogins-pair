<?php

declare(strict_types=1);

namespace Pair\Service;

defined('ABSPATH') || exit;

/**
 * Computes product recommendations from WooCommerce data at request time.
 *
 * FREE strategy: products that share a category with the seed (a product being
 * viewed, or the items in the cart), ordered by popularity (total sales), with
 * a sensible fallback to recent products so the block is never empty. No custom
 * tables and no order-history mining (that is the PRO "frequently bought
 * together" territory).
 */
final class Recommender
{
    /**
     * Recommendations for a single product page ("You may also like").
     *
     * @return array<int, \WC_Product>
     */
    public function forProduct(\WC_Product $product, int $limit, bool $inStockOnly): array
    {
        $categoryIds = $this->categoryIds([$product->get_id()]);

        return $this->query(
            $categoryIds,
            [$product->get_id()],
            $limit,
            $inStockOnly,
        );
    }

    /**
     * Recommendations for the cart (cross-sell suggestions), based on the
     * categories of the items already in the cart, excluding those items.
     *
     * @param array<int, int> $cartProductIds
     * @return array<int, \WC_Product>
     */
    public function forCart(array $cartProductIds, int $limit, bool $inStockOnly): array
    {
        if ($cartProductIds === []) {
            return [];
        }

        $categoryIds = $this->categoryIds($cartProductIds);

        return $this->query(
            $categoryIds,
            $cartProductIds,
            $limit,
            $inStockOnly,
        );
    }

    /**
     * @param array<int, int> $productIds
     * @return array<int, int>
     */
    private function categoryIds(array $productIds): array
    {
        $ids = [];
        foreach ($productIds as $productId) {
            $terms = wc_get_product_term_ids($productId, 'product_cat');
            if (is_array($terms)) {
                foreach ($terms as $termId) {
                    $ids[(int) $termId] = (int) $termId;
                }
            }
        }

        return array_values($ids);
    }

    /**
     * @param array<int, int> $categoryIds
     * @param array<int, int> $excludeIds
     * @return array<int, \WC_Product>
     */
    private function query(array $categoryIds, array $excludeIds, int $limit, bool $inStockOnly): array
    {
        $limit = max(1, min(12, $limit));

        $args = [
            'status'  => 'publish',
            'limit'   => $limit,
            'exclude' => array_values(array_unique(array_map('intval', $excludeIds))),
            'orderby' => 'meta_value_num',
            'meta_key' => 'total_sales', // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key -- popularity sort, bounded by limit.
            'order'   => 'DESC',
            'visibility' => 'catalog',
            'return'  => 'objects',
        ];

        if ($categoryIds !== []) {
            $args['category'] = array_map(
                static fn (int $id): string => (string) $id,
                $categoryIds,
            );
            // wc_get_products expects category slugs OR term ids via tax_query;
            // pass ids through a tax_query for reliability across setups.
            unset($args['category']);
            $args['tax_query'] = [ // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_tax_query -- bounded by limit.
                [
                    'taxonomy' => 'product_cat',
                    'field'    => 'term_id',
                    'terms'    => $categoryIds,
                ],
            ];
        }

        if ($inStockOnly) {
            $args['stock_status'] = 'instock';
        }

        /** @var array<int, \WC_Product> $products */
        $products = wc_get_products($args);

        // Fallback: never render an empty block. Fill with recent products.
        if (count($products) < $limit) {
            $fallback = wc_get_products([
                'status'     => 'publish',
                'limit'      => $limit - count($products),
                'exclude'    => array_values(array_unique(array_merge(
                    array_map('intval', $excludeIds),
                    array_map(static fn (\WC_Product $p): int => $p->get_id(), $products),
                ))),
                'orderby'    => 'date',
                'order'      => 'DESC',
                'visibility' => 'catalog',
                'stock_status' => $inStockOnly ? 'instock' : '',
                'return'     => 'objects',
            ]);
            if (is_array($fallback)) {
                $products = array_merge($products, $fallback);
            }
        }

        return array_values($products);
    }
}
