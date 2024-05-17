<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        // ...
        
        DB::table('users')->updateOrInsert(
            ['email' => 'yogatri@gmail.com'],
            [
                'id' => '1',
                'name' => 'Yoga',
                'email' => 'yogatri@gmail.com',
                'password' => Hash::make('admin'),
                'created_at' => now(),
            ]
        );
        
        DB::table('users')->updateOrInsert(
            ['email' => 'aryaadi@gmail.com'],
            [
                'id' => '2',
                'name' => 'Arya',
                'email' => 'aryaadi@gmail.com',
                'password' => Hash::make('admin'),
                'created_at' => now(),
            ]
        );
        
        DB::table('users')->updateOrInsert(
            ['email' => 'prihat@gmail.com'],
            [
                'id' => '3',
                'name' => 'Prihatma',
                'email' => 'prihat@gmail.com',
                'password' => Hash::make('admin'),
                'created_at' => now(),
            ]
        );
    }
}