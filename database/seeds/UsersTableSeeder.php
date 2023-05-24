<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'grade'          => 'Lieutenant',
                'email'          => 'admin@admin.com',
                'password'       => \Illuminate\Support\Facades\Hash::make('password'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
