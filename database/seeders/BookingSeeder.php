<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::factory()->count(0)->create();
        $bookings = [
            [
                'created at' => now()
            ]
        ];
    }
}
