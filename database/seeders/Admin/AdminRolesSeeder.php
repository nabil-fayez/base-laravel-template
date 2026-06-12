<?php

namespace Database\Seeders\Admin;

use App\Models\Admin\Permission;
use App\Models\Admin\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supportRole = Role::updateOrCreate(
            ['name' => 'support_manager'],
            ['name' => 'support_manager', 'display_name' => 'مدير الدعم الفني']
        );

        $viewPermissions = Permission::whereIn('name', ['tenants.view', 'admins.view'])->pluck('id');
        $supportRole->permissions()->sync($viewPermissions);
    }
}