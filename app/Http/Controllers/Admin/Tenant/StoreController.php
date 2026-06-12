<?php

namespace App\Http\Controllers\Admin\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tenants\StoreTenantRequest;
use App\Models\Tenant\Tenant;
use Symfony\Component\HttpFoundation\RedirectResponse;

class StoreController extends Controller
{
    public function __invoke(StoreTenantRequest $request): RedirectResponse
    {
        $tenant = Tenant::create($request->validated());

        return redirect()->route('admin.tenants.index')->with('success', 'تم إنشاء المنشأة بنجاح.');
    }
}