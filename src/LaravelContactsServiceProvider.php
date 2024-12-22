<?php

namespace Nathanbate\LaravelContacts;

use Illuminate\Support\ServiceProvider;

class LaravelContactsServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/Migrations');

        // Optionally allow publishing of migrations to the main project
//        $this->publishes([
//            __DIR__ . '/Migrations' => database_path('migrations'),
//        ], 'migrations');

        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

    }
}
