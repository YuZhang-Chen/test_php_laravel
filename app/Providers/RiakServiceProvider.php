<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\Riak\Connection;
use App\Service\Riak\UserLogger;
use Illuminate\Contracts\Foundation\Application;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Connection::class, function(Application $app) {
            return new Connection(config('riak'));
        });

        $this->app->singleton('user_logger_1', function(Application $app) {
            return new UserLogger(['filename' => 'user1.log']);
        });

        $this->app->singleton('user_logger_2', function(Application $app) {
            return new UserLogger(['filename' => 'user2.log']);
        });

        $this->app->singleton('user_logger_3', function(Application $app) {
            return new UserLogger(['filename' => 'user3.log']);
        });
    }
}
