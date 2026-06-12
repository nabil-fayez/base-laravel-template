<?php

namespace App\Http\Controllers\Admin\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant\Tenant;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tenants = Tenant::latest()->paginate(10);

        return view('admin.tenants.index', compact('tenants'));
    }
}