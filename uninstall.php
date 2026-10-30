<?php
/**
 * Uninstall cleanup: remove the plugin's own options. No product content is
 * touched (recommendations are computed, never stored).
 *
 * @package Pair
 */

declare(strict_types=1);

defined('WP_UNINSTALL_PLUGIN') || exit;

/**
 * Remove this plugin's options from the current site.
 */
function pair_uninstall_site(): void
{
    delete_option('pair_settings');
    delete_option('pair_db_version');
}

// Options are per site, so a network uninstall has to visit every site.
if (is_multisite()) {
    foreach (get_sites(['fields' => 'ids', 'number' => 0]) as $pair_site_id) {
        switch_to_blog((int) $pair_site_id);
        pair_uninstall_site();
        restore_current_blog();
    }
    unset($pair_site_id);
} else {
    pair_uninstall_site();
}

// The PRO banner's dismissal is stored per user, so it belongs to the
// plugin rather than to the site content. User meta is global, not
// per-site, which is why this uses delete_metadata's \$delete_all rather
// than a loop over the users of one blog.
delete_metadata('user', 0, 'pair_pro_banner_dismissed', '', true);
