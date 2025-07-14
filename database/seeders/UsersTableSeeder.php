<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Gayathra Dilshan',
                'username' => 'gayathra',
                'email' => 'gayathradilshan1@gmail.com',
                'password' => Hash::make('119'),
                'role' => 'admin',
                'status' => 'active',
            ],
        ]);
    }
}
