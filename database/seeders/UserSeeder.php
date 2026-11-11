<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Admin User',
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => 'password123',
            ],
            [
                'username' => 'john',
                'full_name' => 'John Smith',
                'name' => 'John Smith',
                'email' => 'john@example.com',
                'password' => 'password123',
            ],
            [
                'username' => 'mary',
                'full_name' => 'Mary Johnson',
                'name' => 'Mary Johnson',
                'email' => 'mary@example.com',
                'password' => 'password123',
            ],
            [
                'username' => 'mark',
                'full_name' => 'Mark Wilson',
                'name' => 'Mark Wilson',
                'email' => 'mark@example.com',
                'password' => 'password123',
            ],
            [
                'username' => 'anna',
                'full_name' => 'Anna Brown',
                'name' => 'Anna Brown',
                'email' => 'anna@example.com',
                'password' => 'password123',
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['username' => $user['username']],
                $user
            );
        }
    }
}