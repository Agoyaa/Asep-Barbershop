<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;

class BookingController extends Controller
{
    // Function to display the form
    public function create()
    {
        return view('contact',[
            'title' => 'contact'
        ]);
    }

    // Function to store the booking
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'no_handphone' => 'required|string|min:10|max:12',
            'tanggal' => 'required|date_format:Y-m-d',
            'jamcukur' => 'required|date_format:H:i',
        ]);

        Booking::create($request->all());

        return redirect('/')->with('success',' Booking berhasil, silahkan datang tepat waktu!');
        }

    // Function to display all bookings to admin
    public function index()
    {
        $currentDateTime = Carbon::now();
        $bookings = Booking::where('tanggal', '>=', $currentDateTime->format('Y-m-d'))
                        ->orderBy('tanggal')
                        ->orderBy('jamcukur')
                        ->get();
        return view('admin', compact('bookings'))->with('success',' Booking berhasil, silahkan datang tepat waktu!');
    }
}
