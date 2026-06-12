<?php

namespace Database\Seeders\Admin;

use App\Models\Admin\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Admin::updateOrCreate(
            ['email' => 'super@admin.com'],
            [
                'name' => 'Super Controller',
                'email' => 'super@admin.com',
                'password' => Hash::make('password'), // كلمة مرور افتراضية للتجريب
                'is_super_admin' => true,
            ]
        );
    }
}
