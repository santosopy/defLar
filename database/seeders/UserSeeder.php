<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            // [
            //     'name' => "admin",
            //     'email' => 'admin@admin.com',
            //     'password' => Hash::make('123456'),
            //     'is_admin' => 1, 
            // ],
            // [
            //     'name' => "user1",
            //     'email' => 'user1@user.com',
            //     'password' => Hash::make('123456'),
            //     'is_admin' => 0,
            // ],
            [
                'name' => "user2",
                'email' => 'user2@user.com',
                'password' => Hash::make('123456'),
                'is_admin' => 0,
            ]
        ]);
    }
}
