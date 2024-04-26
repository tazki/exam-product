<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin User',
                'email'          => 'admin@app.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'status'         => 1,
            ],
            [
                'id'             => 2,
                'name'           => 'User User',
                'email'          => 'user@app.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'status'         => 1,
            ],
        ];

        User::insert($users);
    }
}