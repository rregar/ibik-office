<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Modules\Masters\UserDetail;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Baris untuk membuat record data di database menggunakan seeder laravel
        // Baris untuk membuat user
        // \App\Models\User::factory()->create([
        //     'name' => 'staff',
        //     'email' => 'staff@example.com',
        //     'password' => Hash::make('ibikoffice123!#'),
        // ])->assignRole('staff');
        // \App\Models\User::factory()->create([
        //     'name' => 'sekretaris',
        //     'email' => 'sekretaris@example.com',
        //     'password' => Hash::make('ibikoffice123!#'),
        // ])->assignRole('sekretaris');

        $user1 = User::factory()->create([
            'name' => 'staff',
            'email' => 'staff@example.com',
            'password' => Hash::make('ibikoffice'),
        ]);
        $user1->assignRole('staff');

        UserDetail::create([
            'user_id' => $user1->id,
            'npm' => '1234567890',
            'birth_date' => '1990-01-01',
            'gender' => 'Male',
            'phone_number' => '085280667900',
            'profile_picture' => null,
        ]);

        $user2 = User::factory()->create([
            'name' => 'sekretaris',
            'email' => 'sekretaris@example.com',
            'password' => Hash::make('ibikoffice'),
        ]);
        $user2->assignRole('sekretaris');

        UserDetail::create([
            'user_id' => $user2->id,
            'npm' => '0987654321',
            'birth_date' => '1992-02-02',
            'gender' => 'Female',
            'phone_number' => '085280667900',
            'profile_picture' => null,
        ]);

        $user3 = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('ibikoffice'),
        ]);
        $user3->assignRole('admin');

        UserDetail::create([
            'user_id' => $user3->id,
            'npm' => '0987654321',
            'birth_date' => '1992-02-02',
            'gender' => 'male',
            'phone_number' => '085280667900',
            'profile_picture' => null,
        ]);
    }
}
