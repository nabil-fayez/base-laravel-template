<?php

namespace Database\Seeders\Tenant;

use App\Models\Tenant\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenant = Tenant::updateOrCreate(
            ['slug' => 'first-tenant'],
            [
                'name' => 'First Tenant',
                'slug' => 'first-tenant',
                'email' => 'first@tenant.com',
                'phone' => '20123456789',
                'owner_id' => null,
                'status'=> 'pending'
            ]
        );
    }
}
