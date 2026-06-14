<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ShowLoginController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// Admin domain routes
require __DIR__ . '/admin.php';

// Tenant staff domain routes
require __DIR__ . '/tenant.php';

// User domain routes
require __DIR__ . '/user.php';