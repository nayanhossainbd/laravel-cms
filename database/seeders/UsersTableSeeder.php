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
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('admin1234'),
                'remember_token' => null,
            ],
             [
                'id'             => 2,
                'name'           => 'Nayan Hossain',
                'email'          => 'nayanhossainbd.786@gmail.com',
                'password'       => bcrypt('admin1234'),
                'remember_token' => null,
            ],
        ];
        

        User::insert($users);
    }
}