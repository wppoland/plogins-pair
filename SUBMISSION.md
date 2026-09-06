# Plogins Pair - wp.org submission packet

Submit this as the next FREE plugin now that Shortlist is approved. Not part of
the shipped zip (`.distignore` excludes `/SUBMISSION.md`).

## Upload

- **Zip:** `/tmp/plogins-pair.zip` (built with `bash scripts/build-zip.sh`, honouring `.distignore`).
- **Add your plugin:** https://wordpress.org/plugins/developers/add/
- **Requested slug:** `plogins-pair` (text domain already `plogins-pair`).
- **Version in this package:** 1.0.9

## One-paragraph description (paste into the submission form)

Pair adds automatic WooCommerce product recommendations with no manual setup: a "You may also like" block on the product page, cart cross-sells from what is already in the cart, and a recently-viewed row. Picks use a bounded query (same category by popularity by default, or tags, best sellers, newest, or recently viewed) and fall back to recent products so a block is never empty. Markup is the active theme's product cards, so there is no extra front-end JavaScript and no layout shift. Recently viewed IDs live in a first-party cookie; nothing leaves the site. Settings use `manage_woocommerce`. Tested on WordPress 7.1 and WooCommerce 11.1.

## Listing copy

- **Display name:** Pair - Product Recommendations for WooCommerce
- **Short description (140 chars):** Automatic WooCommerce product recommendations: "You may also like", cart cross-sells and recently viewed. No manual setup, no layout shift.
- **Full description / FAQ / changelog:** `readme.txt` (the directory renders this).

## Plugin Check notes

- Severity 7 (errors): **0**.
- Severity 5 (warnings): **0**. Seed/cart products are dropped in PHP after the query, not via `exclude` / `post__not_in`.

## After approval

- Merge `next` into `main` if Elementor widgets / the `pair/recommendations` filter are still only on `next`.
- Commit trunk + `.wordpress-org/` icon, banner and screenshots to SVN `assets/`.
- Deploy `.wordpress-org/blueprints/blueprint.json` to SVN `/assets/blueprints/` (see `_deploy-blueprints-svn.sh`) so Live Preview turns on.
- Set the registry `plogins-pair` status live; PRO (`plogins-pair-pro`, Freemius 33352) can go live once its zip is deployed.

