<?php

use App\Http\Controllers\Admin\Auth\ShowLoginController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Tenant\IndexController as TenantIndex;
use App\Http\Controllers\Admin\Tenant\CreateController as TenantCreate;
use App\Http\Controllers\Admin\Tenant\StoreController as TenantStore;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//
Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('login', ShowLoginController::class)->name('login');
    Route::post('login', LoginController::class);
});

// Admin domain routes
Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    // logout route
    Route::post('logout', function () {
        Auth::guard('admin')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('admin.login');
    })->name('logout');

    // Admin dashboard route
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    // Tenants management routes
    Route::prefix('tenants')->name('tenants.')->group(function () {
        Route::get('/', TenantIndex::class)->name('index');
        Route::get('/create', TenantCreate::class)->name('create');
        Route::post('store', TenantStore::class)->name('store');
    });
});