<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LogoutRequest;

class LogoutController extends Controller
{
    /**
     * Handle the incoming logout request for admin authentication.
     *
     * @param  \App\Http\Requests\Admin\Auth\LogoutRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(LogoutRequest $request)
    {
        // Log out the admin user using the 'admin' guard
        auth()->guard('admin')->logout();

        // Invalidate the current session to prevent unauthorized access
        $request->session()->invalidate();

        // Regenerate the session token to prevent CSRF attacks
        $request->session()->regenerateToken();

        // Redirect the user to the admin login page after logout
        return redirect()->route('admin.login');
    }
}
