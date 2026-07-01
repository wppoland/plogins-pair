<?php
/**
 * Service registrations. Returns a closure that wires the container.
 *
 * @package Pair
 *
 * @return \Closure(\Pair\Container): void
 */

declare(strict_types=1);

use Pair\Admin\Settings;
use Pair\Container;
use Pair\Migrator;
use Pair\Service\Recommender;
use Pair\Service\RecommendationsService;

defined('ABSPATH') || exit;

return static function (Container $c): void {
    $c->singleton(Migrator::class, static fn (): Migrator => new Migrator());
    $c->singleton(Recommender::class, static fn (): Recommender => new Recommender());
    $c->singleton(
        RecommendationsService::class,
        static fn (Container $c): RecommendationsService => new RecommendationsService($c->get(Recommender::class)),
    );
    $c->singleton(Settings::class, static fn (): Settings => new Settings());
};
