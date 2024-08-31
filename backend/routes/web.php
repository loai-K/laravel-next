<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return [
        'application' => config('app.name'),
        'version' => app()->version()
    ];
});

require __DIR__.'/auth.php';
