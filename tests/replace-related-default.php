<?php
/**
 * "Replace WooCommerce related products" is on for a fresh install and off for
 * a store whose settings row predates it (1.2.0), so an update never changes a
 * live product page silently. Plain PHP, no WordPress needed:
 *   php tests/replace-related-default.php
 *
 * @package Pair
 */

declare(strict_types=1);

namespace Pair {
    const VERSION = '1.2.0';
    define('Pair\PAIR_DIR', dirname(__DIR__) . '/');
}

namespace {
    define('ABSPATH', __DIR__);

    $GLOBALS['pair_options'] = [];

    function get_option(string $name, mixed $default = false): mixed
    {
        return array_key_exists($name, $GLOBALS['pair_options']) ? $GLOBALS['pair_options'][$name] : $default;
    }

    function add_option(string $name, mixed $value): bool
    {
        if (array_key_exists($name, $GLOBALS['pair_options'])) {
            return false;
        }
        $GLOBALS['pair_options'][$name] = $value;

        return true;
    }

    function update_option(string $name, mixed $value): bool
    {
        $GLOBALS['pair_options'][$name] = $value;

        return true;
    }

    require dirname(__DIR__) . '/src/Migrator.php';

    $migrate = static function (array $options): array {
        $GLOBALS['pair_options'] = $options;
        (new Pair\Migrator())->maybeMigrate();

        return $GLOBALS['pair_options']['pair_settings'];
    };

    // Fresh install: seeded from defaults, so on.
    assert($migrate([])['replace_related'] === true);

    // Existing install updating from 1.1.x: row present without the key, so off.
    $old = $migrate(['pair_db_version' => '1.1.7', 'pair_settings' => ['enabled' => true, 'single_heading' => 'Mine']]);
    assert($old['replace_related'] === false);
    assert($old['single_heading'] === 'Mine');

    // A merchant's saved choice is never overwritten, either way.
    assert($migrate(['pair_db_version' => '1.1.7', 'pair_settings' => ['replace_related' => true]])['replace_related'] === true);
    assert($migrate(['pair_settings' => ['replace_related' => false]])['replace_related'] === false);

    echo "replace-related-default: OK\n";
}
