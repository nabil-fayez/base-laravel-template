<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Admin\AdminPermissionsSeeder;
use Database\Seeders\Admin\AdminRolesSeeder;
use Database\Seeders\Admin\RegularAdminSeeder;
use Database\Seeders\Admin\SuperAdminSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin seeders
        $this->call(SuperAdminSeeder::class);
        $this->call(AdminPermissionsSeeder::class);
        $this->call(AdminRolesSeeder::class);
        $this->call(RegularAdminSeeder::class);

        //
    }
}