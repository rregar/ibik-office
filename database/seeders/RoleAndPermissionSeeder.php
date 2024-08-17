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
        Permission::create(['name' => 'view dashboard']);
        // Baris untuk membuat role atau peran atau aktor
        Role::create(['name' => 'staff', 'guard_name' => 'web'])->givePermissionTo([
            'view dashboard',
        ]);
        Role::create(['name' => 'sekretaris', 'guard_name' => 'web'])->givePermissionTo([
            'view dashboard',
        ]);
    }
}
