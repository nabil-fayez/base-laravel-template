<?php

namespace Database\Seeders\Tenant;

use App\Models\Admin\Tenant;
use App\Models\Tenant\TenantUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TenantOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenant_owner = TenantUser::updateOrCreate(
            ['email'=> 'owner@tenant.com'],
            [
                'name' => 'Owner',
                'email' => 'owner@tenant.com',
                'password' => Hash::make('password')
                ]
        );

        $tenant = Tenant::update(
            ['slug' => 'first-tenant'],
            [
                'owner_id'=>$tenant_owner->id,
                'status'=>'active'
            ]
        );
    }
}
