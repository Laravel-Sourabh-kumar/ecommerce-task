<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2a$12$vwD2a74typ/hBqSrSk8L6OzficgLvWS8iqZgau0kLgw2RrqIxvscK',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}