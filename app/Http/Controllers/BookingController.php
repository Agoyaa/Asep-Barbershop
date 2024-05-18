<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

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
            'no_handphone' => 'required|string|max:15',
            'jamcukur' => 'required|date_format:H:i',
        ]);

        Booking::create($request->all());

        return redirect('/')->with('success',' Booking berhasil, silahkan datang tepat waktu!');
        }

    // Function to display all bookings to admin
    public function index()
    {
        $bookings = Booking::all();
        return view('admin', compact('bookings'))->with('success',' Booking berhasil, silahkan datang tepat waktu!');
    }
}
