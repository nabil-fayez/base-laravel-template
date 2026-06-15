<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Model;

class TenantUser extends Model
{
    protected $table = 'tenant_users';

    public function tenants() : BelongsToMany 
    {
        return $this->belongsToMany(Tenant::class,'tenant_user');
    }
    public function isOwner() : bool 
    {
        return $this->tenants->owner_id == $this->id;
    }
    /**
     * The roles that belong to the tenant user.
     */

    public function roles()
    {
        return $this->belongsToMany(TenantRole::class, 'tenant_role_pivot');
    }

    /**
     * Check if the tenant user has a specific permission.
     */
    public function hasPermission(string $ability): bool
    {

    if($this->isOwner){
        return true;
    }
    
    // Fetch all permissions for the tenant user through their roles and check for a match
    return $this->roles()
    ->with('permissions')
    ->get()
    ->pluck('permissions')
    ->flatten()
    ->contains('code', $ability);
    }
}