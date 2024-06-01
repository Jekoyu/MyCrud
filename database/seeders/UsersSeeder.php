<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'), // Hash password
            'address' => 'Sleman',
            'username' => 'admin',
        ]);

        User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@admin.com',
            'password' => Hash::make('superadmin'), // Hash password
            'address' => 'Klaten',
            'username' => 'superadmin',
        ]);
    }
}
