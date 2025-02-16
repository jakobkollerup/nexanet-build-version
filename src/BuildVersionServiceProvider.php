<?php

namespace YourVendor\BuildVersion;

use Illuminate\Support\ServiceProvider;
use Nexanet\BuildVersion\Middleware\AddBuildVersionHeaders;

class BuildVersionServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // We publish the configuration file
        $this->publishes([
            __DIR__ . '/config/build-version.php' => config_path('build-version.php'),
        ], 'Config');

        // We register the middleware for the API group
        app('router')->pushMiddlewareToGroup('api', AddBuildVersionHeaders::class);
    }

    public function register(): void
    {
        // Merge configuration
        $this->mergeConfigFrom(
            __DIR__ . '/config/build-version.php', 'build-version'
        );
    }
}
