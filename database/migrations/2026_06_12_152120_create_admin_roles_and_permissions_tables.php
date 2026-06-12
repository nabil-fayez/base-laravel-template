<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Create tables for admin roles and permissions
        Schema::create('admin_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('display_name');
            $table->string('group');
            $table->timestamps();
        });
        // The pivot table for the many-to-many relationship between admin roles and permissions
        Schema::create('admin_roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('display_name');
            $table->timestamps();
        });
        // The pivot table for the many-to-many relationship between admin roles and permissions
        Schema::create('admin_permission_role', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained('admin_roles')->cascadeOnDelete();
            $table->foreignId('permission_id')->constrained('admin_permissions')->cascadeOnDelete();
            $table->primary(['role_id', 'permission_id']);
        });
        // The pivot table for the many-to-many relationship between admins and roles
        Schema::create('admin_admin_role', function (Blueprint $table) {
            $table->foreignId('admin_id')->constrained('admins')->cascadeOnDelete();
            $table->foreignId('role_id')->constrained('admin_roles')->cascadeOnDelete();
            $table->primary(['admin_id', 'role_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_admin_role');
        Schema::dropIfExists('admin_permission_role');
        Schema::dropIfExists('admin_roles');
        Schema::dropIfExists('admin_permissions');
    }
};