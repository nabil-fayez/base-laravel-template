<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminIsAuthenticatedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the admin user is authenticated using the 'admin' guard
        if (!auth()->guard('admin')->check()) {
            // If not authenticated, redirect to the admin login page
            return redirect()->route('admin.login');
        }
        return $next($request);
    }
}
