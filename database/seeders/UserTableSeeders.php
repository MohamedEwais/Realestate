<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'name'=>'Admin',
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('123'),
                'role'=>'admin',
                'status'=>'active',
            ], //Agent
            [
                'name'=>'Agant',
                'username'=>'agant',
                'email'=>'agant@gmail.com',
                'password'=>Hash::make('123'),
                'role'=>'agant',
                'status'=>'active',
            ],//user
            [
                'name'=>'User',
                'username'=>'user',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('123'),
                'role'=>'user',
                'status'=>'active',
            ]
            ]);

    }
}
