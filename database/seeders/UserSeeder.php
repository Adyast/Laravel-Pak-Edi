<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Ajie 1',
            'email' => 'user1@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Ajie 2',
            'email' => 'user2@example.com',
            'password' => Hash::make('password'),
        ]);
        
        User::create([
            'name' => 'User 3',
            'email' => 'user3@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
