<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Baris untuk membuat record data di database menggunakan seeder laravel
        // Baris untuk membuat permission atau hak akses
        Permission::create(['name' => 'view_dashboard']);
        Permission::create(['name' => 'manage_masters']);

        // Baris untuk membuat role atau peran atau aktor
        Role::create(['name' => 'admin', 'guard_name' => 'web'])->givePermissionTo([
            'view_dashboard',
            'manage_masters',
        ]);

        Role::create(['name' => 'rektor', 'guard_name' => 'web'])->givePermissionTo([
            'view_dashboard',
        ]);

        Role::create(['name' => 'wakil_rektor', 'guard_name' => 'web'])->givePermissionTo([
            'view_dashboard',
        ]);

        Role::create(['name' => 'ketua_program_studi', 'guard_name' => 'web'])->givePermissionTo([
            'view_dashboard',
        ]);

        Role::create(['name' => 'dekan', 'guard_name' => 'web'])->givePermissionTo([
            'view_dashboard',
        ]);

        Role::create(['name' => 'sekretaris', 'guard_name' => 'web'])->givePermissionTo([
            'view_dashboard',
        ]);

        Role::create(['name' => 'staff', 'guard_name' => 'web'])->givePermissionTo([
            'view_dashboard',
        ]);
    }
}
