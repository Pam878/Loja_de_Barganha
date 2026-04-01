<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // This will only create the user if the email doesn't exist
        User::firstOrCreate(
            ['email' => 'admin@barganha.com'],
            [
                'name' => 'Admin Loja',
                'password' => Hash::make('admin123'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'user@teste.com'],
            [
                'name' => 'Usuario Comum',
                'password' => Hash::make('user123'),
            ]
        );
    }
}