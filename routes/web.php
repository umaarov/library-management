<?php

use Illuminate\Support\Facades\Route;

Route::domain('laravel.local')->group(function () {
    Route::get('/', function () {
        return 'Normal';
    });
});

Route::domain('admin.laravel.local')->group(function () {
    Route::get('/', function () {
        return 'Admin';
    });
});
