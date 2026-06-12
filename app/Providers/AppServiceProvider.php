<?php

namespace App\Providers;

use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Global gate to allow super admins to bypass all permissions checks
        Gate::before(function ($user, $ability) {
            if ($user instanceof Admin && $user->isSuperAdmin()) {
                return true;
            }
        });
        // Global gate to check permissions for both admin and tenant users
        Gate::before(function ($user, $ability) {
            if (method_exists($user, 'hasPermission')) {
                return $user->hasPermission($ability) ?: null;
            }
        });
    }
}