<?php

namespace App\Providers;

use App\Service\PodcastParser;
use App\Service\Transistor;
use App\Service\Helper;
use App\Service\Notification;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // 1. Singleton: Only one instance per request lifecycle
        $this->app->singleton(Transistor::class, function (Application $app) {
            return new Transistor($app->make(PodcastParser::class));
        });

        // 2. Bind: A new instance every time it is resolved
        $this->app->bind(Notification::class, function (Application $app) {
            return new Notification($app->make(Helper::class));
        });

        // 3. Scoped: Singleton per request, resets in long-running environments
        $this->app->scoped(Helper::class, function (Application $app) {
            return new Helper();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
