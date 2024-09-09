<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User
        User::create([
            'name' => 'user123',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123')
        ]);
        // Admin
        User::create([
            'name' => 'admin123',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123')
        ]);

        User::create([
            'name' => 'lala',
            'email' => 'lala@gmail.com',
            'password' => bcrypt('lala123')
        ]);
    }
}
