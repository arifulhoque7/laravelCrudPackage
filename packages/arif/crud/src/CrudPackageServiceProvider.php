<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class YourCrudPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateCRUD::class,
            ]);
        }
        $this->registerRoutes();
    }

    public function register()
    {
        //
    }
    protected function registerRoutes()
    {
        $routeConfig = [
            'prefix' => config('crud.route_prefix', 'your-resource'),
            'middleware' => config('crud.middleware', 'web'),
        ];

        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->publishes([
            __DIR__.'/routes.php' => base_path('routes/crud.php'),
        ], 'routes');
    }
}