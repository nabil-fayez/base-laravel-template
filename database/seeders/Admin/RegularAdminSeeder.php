<?php

namespace Database\Seeders\Admin;

use App\Models\Admin\Admin;
use App\Models\Admin\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RegularAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supportRole = Role::where('name', 'support_manager')->first();
        $regularAdmin = Admin::updateOrCreate(
            ['email' => 'employee@admin.com'],
            [
                'name' => 'Ahmad Support',
                'email' => 'employee@admin.com',
                'password' => Hash::make('password123'),
                'is_super_admin' => false, // this admin will not have super admin privileges
            ]
        );
        // Assign the support manager role to the regular admin
        $regularAdmin->roles()->sync([$supportRole->id]);
    }
}