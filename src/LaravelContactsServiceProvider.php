<?php

namespace Nathanbate\LaravelContacts;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Nathanbate\LaravelContacts\Livewire\HelloWorld;

class LaravelContactsServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/Views', 'laravel-contacts');

        // Components
        Livewire::component('laravel-contacts::hello-world', HelloWorld::class);

    }
}
