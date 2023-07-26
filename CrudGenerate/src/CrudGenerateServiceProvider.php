<?php

namespace Asad\CrudGenerate;

use Illuminate\Support\ServiceProvider;

class CrudGenerateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            Commands\CrudGenerateCommand::class,
        ]);

        // Merge the package's configuration with the application's configuration
        // $this->mergeConfigFrom(
        //     __DIR__.'/../../config/crud-generator.php', 'crud-generator'
        // );
    }

    public function boot()
    {
        // Register the package's routes in the application's route file (web.php)
        if (!$this->app->routesAreCached()) {
            require __DIR__.'/../../routes/web.php';
        }

        // Publish the package's configuration file
        $this->publishes([
            __DIR__.'/../../config/crud-generator.php' => config_path('crud-generator.php'),
        ], 'config');

        // Publish the package's views to the application's view directory
        $this->publishes([
            __DIR__.'/../../resources/views' => resource_path('views/vendor/crud-generator'),
        ], 'views');

        // Publish the package's migration file
        $this->publishes([
            __DIR__.'/../../database/migrations' => database_path('migrations'),
        ], 'migrations');

        // Register the custom Artisan command
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Asad\CrudGenerate\Commands\CrudGenerateCommand::class,
            ]);
        }
    }
}
