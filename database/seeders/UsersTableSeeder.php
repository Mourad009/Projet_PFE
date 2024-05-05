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

            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active',
                'photo' => 'https://via.placeholder.com/60', 
                'phone' => '33445566', 
                'address' => 'rim', 

            ],

            //developer

            [
                'name' => 'Developer',
                'username' => 'developer',
                'email' => 'developer@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'developer',
                'status' => 'active',
                'photo' => 'https://via.placeholder.com/60', 
                'phone' => '7777666', 
                'address' => 'bamako', 

            ],

            //user

            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => 'active',
                'photo' => 'https://via.placeholder.com/60', 
                'phone' => '87887', 
                'address' => 'bmd', 


            ],

        ]);
    }
}
