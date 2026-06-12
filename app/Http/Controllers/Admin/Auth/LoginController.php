<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Handle the incoming login request for admin authentication.
     *
     * @param  \App\Http\Requests\Admin\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function __invoke(LoginRequest $request): RedirectResponse
    {
        // Extract the validated credentials and remember option from the request
        $credentials = $request->only('email', 'password');
        $remember    = $request->boolean('remember');
        // Attempt to authenticate the admin user using the 'admin' guard
        if (! Auth::guard('admin')->attempt($credentials, $remember)) {

            throw ValidationException::withMessages([
                'email' => __('The provided credentials do not match our records.'),
            ]);
        }
        // Regenerate the session to prevent session fixation attacks
        $request->session()->regenerate();

        // Redirect regular admins to the standard admin dashboard
        return redirect()->intended(route('admin.dashboard'));
    }
}
