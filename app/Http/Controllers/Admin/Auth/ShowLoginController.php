<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowLoginController extends Controller
{
    /**
     * Handle the incoming request to show the admin login form.
     */
    public function __invoke(Request $request)
    {
        return view('admin.auth.login');
    }
}