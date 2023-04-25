<?php

namespace TechDjoin\SmallApp\Providers;

use Illuminate\Support\ServiceProvider;

class SmallAppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->make('TechDjoin\SmallApp\Controllers\MainController');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'small-app');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/../routes/web.php';
    }
}
