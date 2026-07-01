<?php

declare(strict_types=1);

namespace Pair\Service;

use Pair\Contract\HasHooks;

defined('ABSPATH') || exit;

/**
 * Records the products a visitor views, in a first-party functional cookie, so
 * a "Recently viewed" block can be shown. Stores only product IDs on the
 * visitor's own device; nothing is sent anywhere and no personal data is kept.
 */
final class Tracker implements HasHooks
{
    public const COOKIE = 'pair_recently_viewed';

    private const MAX = 20;

    public function registerHooks(): void
    {
        // template_redirect runs before any output, so setcookie() is safe here.
        add_action('template_redirect', [$this, 'record']);
    }

    public function record(): void
    {
        if (is_admin() || ! function_exists('is_product') || ! is_product()) {
            return;
        }

        $id = (int) get_queried_object_id();
        if ($id <= 0) {
            return;
        }

        $ids = $this->ids();
        // Move this product to the front, de-duplicated, capped.
        $ids = array_values(array_diff($ids, [$id]));
        array_unshift($ids, $id);
        $ids = array_slice($ids, 0, self::MAX);

        if (! headers_sent()) {
            setcookie(
                self::COOKIE,
                implode(',', $ids),
                [
                    'expires'  => time() + 30 * DAY_IN_SECONDS,
                    'path'     => defined('COOKIEPATH') ? COOKIEPATH : '/',
                    'domain'   => defined('COOKIE_DOMAIN') ? COOKIE_DOMAIN : '',
                    'secure'   => is_ssl(),
                    'httponly' => false,
                    'samesite' => 'Lax',
                ],
            );
        }

        // Reflect immediately for the current request.
        $_COOKIE[self::COOKIE] = implode(',', $ids);
    }

    /**
     * Recently viewed product IDs, most recent first.
     *
     * @return array<int, int>
     */
    public function ids(): array
    {
        $raw = isset($_COOKIE[self::COOKIE]) ? sanitize_text_field(wp_unslash((string) $_COOKIE[self::COOKIE])) : '';
        if ($raw === '') {
            return [];
        }

        $ids = array_map('intval', explode(',', $raw));

        return array_values(array_filter($ids, static fn (int $id): bool => $id > 0));
    }
}
