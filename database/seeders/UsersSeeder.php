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
        //


        User::create([
            'name' => 'lala',
            'email' => 'lala@gmail.com',
            'password' => bcrypt('lala1234')
            // 'profile_picture' =
        ]);
    }
}
