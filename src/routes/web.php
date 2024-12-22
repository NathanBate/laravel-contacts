<?php

use Nathanbate\LaravelContacts\Controllers\ContactController;

Route::middleware('web')->prefix('laravel-contacts')->group(function () {
    Route::resource('contacts', ContactController::class);
});
