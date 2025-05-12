<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@panti.com',
            'password' => Hash::make('password123'),
            'role' => 'superadmin',
            'is_active' => true
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@panti.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
            'is_active' => true
        ]);
        User::create([
            'name' => 'Donatur',
            'email' => 'donatur@panti.com',
            'password' => Hash::make('password123'),
            'role' => 'donatur',
            'is_active' => true
        ]);
    
    }
}
