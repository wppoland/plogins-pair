# Plogins Pair - wp.org submission packet

Ready to submit as the next FREE plugin (after tiers is approved). Not part of
the shipped zip (`.distignore` excludes `/SUBMISSION.md`... add if missing).

## Upload

- **Zip:** `/tmp/plogins-pair.zip` (24 KB, built honouring `.distignore`, 0 forbidden folders, version 0.1.0).
- **Add your plugin:** https://wordpress.org/plugins/developers/add/
- **Requested slug:** `plogins-pair` (verified free 2026-07-02; text domain already `plogins-pair` so 0 TextDomainMismatch).

## Plugin Check (wp-env, WooCommerce + plugin-check)

- Severity 7 (errors): **0**.
- Severity 5 (warnings): **1** benign — `WordPressVIPMinimum ... PostNotIn_exclude` at `src/Service/Recommender.php:119` (using `exclude` in `wc_get_products`, bounded by limit; VIP-hosting advisory, not a wp.org guideline). The "short description too long" warning was fixed (now 140 chars).

## Listing copy

- **Display name:** Plogins Pair - Product Recommendations for WooCommerce
- **Short description (140 chars):** Automatic WooCommerce product recommendations: "You may also like", cart cross-sells and recently viewed. No manual setup, no layout shift.
- **Full description / FAQ / changelog:** `readme.txt` (the directory renders this).

## After approval

- Set the registry `plogins-pair` status live if not already; the PRO (`plogins-pair-pro`, Freemius 33352) can then go live once its zip is deployed.
- Deploy the `.wordpress-org/blueprints/blueprint.json` to SVN `/assets/blueprints/` (see `_deploy-blueprints-svn.sh`) so Live Preview turns on.

## Reply-to-reviewer note (if they ask)

> The `exclude` parameter in the recommender query is bounded by the block's
> product limit (max 12), so the excluded-IDs set is tiny. Kept for correctness
> (never recommend the seed/cart products). Happy to adjust if preferred.
