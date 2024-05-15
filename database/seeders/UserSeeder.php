<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        try {
            User::insert([
                [
                    'nama' => "Arya Adi Wijaya",
                    'username' => "arya",
                    'password' => Hash::make("12345678"),
                ],
                [
                    'nama' => "Prihatma Nurwahid",
                    'username' => "prit",
                    'password' => Hash::make("12345678"),
                ],
                [
                    'nama' => "Yoga Triansyah",
                    'username' => "yoga",
                    'password' => Hash::make("12345678"),
                ],
                // Add more users if needed
            ]);
        } catch (\Exception $e) {
            // Handle any exceptions
            echo "Error: " . $e->getMessage();
        }
    }
}
