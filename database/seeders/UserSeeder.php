<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Baris untuk membuat record data di database menggunakan seeder laravel
        // Baris untuk membuat user
        \App\Models\User::factory()->create([
            'name' => 'staff',
            'email' => 'staff@example.com',
            'password' => Hash::make('ibikoffice123!#'),
        ])->assignRole('staff');
        \App\Models\User::factory()->create([
            'name' => 'sekretaris',
            'email' => 'sekretaris@example.com',
            'password' => Hash::make('ibikoffice123!#'),
        ])->assignRole('sekretaris');
    }
}
