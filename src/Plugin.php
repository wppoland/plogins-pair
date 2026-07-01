<?php

declare(strict_types=1);

namespace Pair;

use Pair\Contract\HasHooks;

defined('ABSPATH') || exit;

final class Plugin
{
    private static ?self $instance = null;

    private Container $container;

    private bool $booted = false;

    private function __construct()
    {
        $this->container = new Container();
        (require __DIR__ . '/../config/services.php')($this->container);
    }

    public static function instance(): self
    {
        return self::$instance ??= new self();
    }

    public function container(): Container
    {
        return $this->container;
    }

    public function boot(): void
    {
        if ($this->booted) {
            return;
        }
        $this->booted = true;

        // Version-gated, per-site: also self-heals on WordPress Multisite where
        // activation runs only on the main site (each site seeds on first boot).
        $this->container->get(Migrator::class)->maybeMigrate();

        /** @var array<class-string<HasHooks>> $hooks */
        $hooks = require __DIR__ . '/../config/hooks.php';
        foreach ($hooks as $id) {
            $service = $this->container->get($id);
            if ($service instanceof HasHooks) {
                $service->registerHooks();
            }
        }

        /**
         * Fires after Pair has fully booted. PRO add-ons and other code can hook
         * here to extend it.
         *
         * @param Plugin $plugin The booted plugin instance.
         */
        do_action('pair/booted', $this);
    }
}
