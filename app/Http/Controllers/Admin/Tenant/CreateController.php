<?php

namespace App\Http\Controllers\Admin\Tenant;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.tenants.create');
    }
}
