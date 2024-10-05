<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminAuth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\LoanController;

Route::domain('laravel.local')->group(function () {
    Route::get('/', function () {
        return 'Normal';
    });
});

Route::domain('admin.laravel.local')->group(function () {

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        Route::resource('books', BookController::class);

        Route::resource('users', UserController::class);

        Route::resource('groups', GroupController::class);

        Route::resource('categories', CategoryController::class);

        Route::resource('loans', LoanController::class);
    });
});

