<?php

namespace Database\Seeders\Admin;

use App\Models\Admin\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // مجموعة إدارة الشركات (Tenants)
            ['name' => 'tenants.view', 'display_name' => 'عرض الشركات المنشأة', 'group' => 'إدارة المنشآت'],
            ['name' => 'tenants.create', 'display_name' => 'إضافة منشأة جديدة', 'group' => 'إدارة المنشآت'],
            ['name' => 'tenants.edit', 'display_name' => 'تعديل بيانات منشأة', 'group' => 'إدارة المنشآت'],
            ['name' => 'tenants.delete', 'display_name' => 'حذف منشأة من النظام', 'group' => 'إدارة المنشآت'],

            // مجموعة إدارة موظفي النظام (Admins)
            ['name' => 'admins.view', 'display_name' => 'عرض موظفي النظام', 'group' => 'إدارة الموظفين'],
            ['name' => 'admins.create', 'display_name' => 'إضافة موظف جديد', 'group' => 'إدارة الموظفين'],
            ['name' => 'admins.edit', 'display_name' => 'تعديل صلاحيات موظف', 'group' => 'إدارة الموظفين'],
        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission['name']], $permission);
        }
    }
}