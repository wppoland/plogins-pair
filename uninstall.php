<?php
/**
 * Uninstall cleanup: remove the plugin's own options. No product content is
 * touched (recommendations are computed, never stored).
 *
 * @package Pair
 */

declare(strict_types=1);

defined('WP_UNINSTALL_PLUGIN') || exit;

delete_option('pair_settings');
delete_option('pair_db_version');
