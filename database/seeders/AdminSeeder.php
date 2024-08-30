<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'first_name' => 'rico',
                'last_name'  => 'bugwak',      
                'role_name' => 'Admin',
                'email' => 'rico@gmail.com',
                'password' => Hash::make('1234567890'),

            ],
            [
                'first_name' => 'Merla',
                'last_name'  => 'Ner',      
                'role_name' => 'Admin',
                'email' => 'merla@gmail.com',
                'password' => Hash::make('admin123'),
            ]
        ]);
    }
}