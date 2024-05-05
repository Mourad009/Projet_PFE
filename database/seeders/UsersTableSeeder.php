<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            //admin

            // [
            //     'name' => 'Admin',
            //     'username' => 'admin',
            //     'email' => 'admin@gmail.com',
            //     'password' => Hash::make('111'),
            //     'role' => 'admin',
            //     'status' => 'active',
            //     'photo' => 'https://via.placeholder.com/60', 
            //     'phone' => '33445566', 
            //     'address' => 'rim', 

            // ],

            //developer

            [
                'name' => 'Mouhamed Larabase',
                'username' => 'Mouhamed Larabase',
                'email' => 'medlarabase@gmail.com',
                'password' => Hash::make('developer'),
                'role' => 'developer',
                'status' => 'active',
                'photo' => 'https://via.placeholder.com/60', 
                'phone' => '22445566', 
                'address' => 'ayoun', 

            ],

            //user

            // [
            //     'name' => 'User',
            //     'username' => 'user',
            //     'email' => 'user@gmail.com',
            //     'password' => Hash::make('111'),
            //     'role' => 'user',
            //     'status' => 'active',
            //     'photo' => 'https://via.placeholder.com/60', 
            //     'phone' => '87887', 
            //     'address' => 'bmd', 


            // ],

            

        ]);
    }
}
