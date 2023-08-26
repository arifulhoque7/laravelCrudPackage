<?php

use Illuminate\Support\Facades\Route;


Route::middleware($routeConfig['middleware'])->prefix($routeConfig['prefix'])->group(function () {
    Route::resource('your-resource', YourController::class);
    // Define more routes as needed
});