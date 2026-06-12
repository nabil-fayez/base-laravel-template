<?php

namespace App\Models\Admin;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'is_super_admin'];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = ['is_super_admin' => 'boolean', 'password' => 'hashed'];

    public function isSuperAdmin(): bool
    {
        return $this->is_super_admin === true;
    }

    /**
     * The roles that belong to the admin.
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'admin_admin_role');
    }

    /**
     * Check if the admin has a specific permission through their roles.
     */
    public function hasPermission(string $ability): bool
    {
        // Check if the admin has the permission through any of their roles
        return $this->roles()->whereHas('permissions', function ($query) use ($ability) {
            $query->where('name', $ability);
        })->exists();
    }
}