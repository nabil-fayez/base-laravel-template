<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    protected $table = 'tenant_roles';
    protected $fillable = ['name', 'display_name'];

    /**
     * The permissions that belong to the role.
     */
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'tenant_permission_role');
    }

    /**
     * The tenants that belong to the role.
     */
    public function admins(): BelongsToMany
    {
        return $this->belongsToMany(Admin::class, 'tenant_user_role');
    }
}