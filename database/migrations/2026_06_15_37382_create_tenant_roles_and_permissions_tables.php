<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Create tables for tenant roles and permissions
        Schema::create('tenant_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('display_name');
            $table->string('group');
            $table->timestamps();
        });
        // The pivot table for the many-to-many relationship between tenant roles and permissions
        Schema::create('tenant_roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('display_name');
            $table->timestamps();
        });
        // The pivot table for the many-to-many relationship between tenant roles and permissions
        Schema::create('tenant_permission_role', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained('tenant_roles')->cascadeOnDelete();
            $table->foreignId('permission_id')->constrained('tenant_permissions')->cascadeOnDelete();
            $table->primary(['role_id', 'permission_id']);
        });
        // The pivot table for the many-to-many relationship between tenant-users and roles
        Schema::create('tenant_user_role', function (Blueprint $table) {
            $table->foreignId('tenant_user_id')->constrained('tenant_users')->cascadeOnDelete();
            $table->foreignId('role_id')->constrained('tenant_roles')->cascadeOnDelete();
            $table->primary(['tenant_user_id', 'role_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenant_user_role');
        Schema::dropIfExists('tenant_permission_role');
        Schema::dropIfExists('tenant_roles');
        Schema::dropIfExists('tenant_permissions');
    }
};