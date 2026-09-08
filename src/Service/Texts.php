<?php

declare(strict_types=1);

namespace Pair\Service;

defined('ABSPATH') || exit;

/**
 * The three storefront headings a merchant may override, in the language of the
 * site at the moment they are shown.
 *
 * They used to be `__()` calls inside config/defaults.php, which is worse than
 * it looks. That file is required at activation and its result written into
 * `pair_settings`, so whatever locale the admin happened to be in was frozen
 * into the database: a shop activated in English shows English headings to its
 * Polish customers forever, and switching the site language never changes them.
 * Required early enough, the same call also returns untranslated text and, since
 * WordPress 6.7, warns about loading a text domain too soon.
 *
 * The packaged default is now empty, meaning "use the heading below", resolved
 * at render. A merchant who types their own still wins.
 */
final class Texts
{
    /**
     * Setting key => the translated default.
     *
     * @return array<string, string>
     */
    public static function defaults(): array
    {
        return [
            'single_heading'   => __('You may also like', 'plogins-pair'),
            'cart_heading'     => __('Add these to your order', 'plogins-pair'),
            'recently_heading' => __('Recently viewed', 'plogins-pair'),
        ];
    }

    /**
     * Fill every empty heading with its translated default.
     *
     * Applied on the way OUT only. Writing the resolved text back to the option
     * is the bug this class exists to fix.
     *
     * @param array<string, mixed> $settings
     * @return array<string, mixed>
     */
    public static function apply(array $settings): array
    {
        foreach (self::defaults() as $key => $text) {
            if (trim((string) ($settings[$key] ?? '')) === '') {
                $settings[$key] = $text;
            }
        }

        return $settings;
    }
}
