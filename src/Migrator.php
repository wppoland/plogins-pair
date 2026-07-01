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

        update_option(self::OPTION_VERSION, VERSION);
    }
}
