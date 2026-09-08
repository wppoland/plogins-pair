<?php

declare(strict_types=1);

namespace Pair;

defined('ABSPATH') || exit;

/**
 * Seeds default settings once and tracks a per-site schema version. There is no
 * custom database table: recommendations are computed from WooCommerce product
 * data at request time, so only the settings option is seeded.
 */
final class Migrator
{
    private const OPTION_VERSION = 'pair_db_version';

    public const OPTION_SETTINGS = 'pair_settings';

    public function maybeMigrate(): void
    {
        $stored = (string) get_option(self::OPTION_VERSION, '');

        if ($stored === VERSION) {
            return;
        }

        if (get_option(self::OPTION_SETTINGS, null) === null) {
            /** @var array<string, mixed> $defaults */
            $defaults = require PAIR_DIR . 'config/defaults.php';
            add_option(self::OPTION_SETTINGS, $defaults);
        }

        $this->clearFrozenHeadings();

        update_option(self::OPTION_VERSION, VERSION);
    }

    /**
     * The English headings that shipped up to 1.1.1 and were written into the
     * option at activation.
     *
     * The old defaults were `__()` calls evaluated while the file was being
     * required, so strictly a shop could have frozen a translated heading
     * instead. In practice none did: no language pack exists for this plugin on
     * translate.wordpress.org yet, so every install stored English. Sweeping
     * only the English text keeps the rule simple and cannot touch a heading a
     * merchant chose.
     *
     * @var array<string, string>
     */
    private const LEGACY_HEADINGS = [
        'single_heading'   => 'You may also like',
        'cart_heading'     => 'Add these to your order',
        'recently_heading' => 'Recently viewed',
    ];

    /**
     * Clear a stored heading that is byte for byte the old English default, so
     * the translated one takes over. A heading a merchant typed is kept.
     */
    private function clearFrozenHeadings(): void
    {
        $stored = get_option(self::OPTION_SETTINGS, null);
        if (! is_array($stored)) {
            return;
        }

        $changed = false;
        foreach (self::LEGACY_HEADINGS as $key => $legacy) {
            if (isset($stored[$key]) && (string) $stored[$key] === $legacy) {
                $stored[$key] = '';
                $changed      = true;
            }
        }

        if ($changed) {
            update_option(self::OPTION_SETTINGS, $stored);
        }
    }
}
