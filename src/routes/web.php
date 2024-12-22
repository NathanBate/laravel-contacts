<?php

use Nathanbate\LaravelContacts\Controllers\ContactController;

Route::middleware('web')->group(function () {
    Route::resource('contacts', ContactController::class);
});
