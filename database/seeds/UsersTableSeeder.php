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
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$E3dzwpVPqI4ZE/rrz.pSzOZatGQMPCXfl0DiBlwTa/2q18EcmUHqW',
                'remember_token' => null,
                'verified'       => 1,
                'verified_at'    => now(),
                'is_admin'       =>1,
            ],
            [
                'id'             => 2,
                'name'           => 'User',
                'email'          => 'user@user.com',
                'password'       => '$2y$10$E3dzwpVPqI4ZE/rrz.pSzOZatGQMPCXfl0DiBlwTa/2q18EcmUHqW',
                'remember_token' => null,
                'verified'       => 1,
                'verified_at'    => now(),
                'is_user'       =>1,

            ],
            [
                'id'             => 3,
                'name'           => 'Staff',
                'email'          => 'staff@staff.com',
                'password'       => '$2y$10$E3dzwpVPqI4ZE/rrz.pSzOZatGQMPCXfl0DiBlwTa/2q18EcmUHqW',
                'remember_token' => null,
                'verified'       => 1,
                'verified_at'    => now(),
                'is_staff'       =>1,
            ],
        ];

        User::insert($users);
    }
}
