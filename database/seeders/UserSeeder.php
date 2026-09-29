<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@solidsport.com',
            'password' => Hash::make('password123'),
            'no_hp' => '081234567890',
            'role' => 'admin',
        ]);

        User::create([
            'nama' => 'Pelanggan',
            'email' => 'pelanggan@solidsport.com',
            'password' => Hash::make('password123'),
            'no_hp' => '081234567891',
            'role' => 'pelanggan',
        ]);
    }
}