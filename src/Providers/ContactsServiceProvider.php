<?php

namespace Nathanbate\LaravelContacts\Providers;

use Illuminate\Support\ServiceProvider;

class ContactsServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Merge package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/contacts.php', 'contacts');
    }

    public function boot()
    {
        // Publish config
        $this->publishes([
            __DIR__.'/../config/contacts.php' => config_path('contacts.php'),
        ]);

        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../Migrations');

        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
