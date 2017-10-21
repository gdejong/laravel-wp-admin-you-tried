<?php

namespace gdejong\LaravelWPAdminYouTried;

use Illuminate\Support\ServiceProvider;

class LaravelWPAdminYouTriedServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish config.
        $this->publishes([
            __DIR__.'/../config/wp-admin-you-tried.php' => config_path('wp-admin-you-tried.php'),
        ], 'config');

        // Publish assets.
        $this->publishes([
            __DIR__ . '/../assets' => public_path('vendor/gdejong'),
        ], 'public');

        // Load views.
        $this->loadViewsFrom(__DIR__ . '/../views', 'gdejong');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
