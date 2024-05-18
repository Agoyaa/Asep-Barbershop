<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    function index()
    {
        return view("sesi/index", [
            'title' => 'Login'
        ]);
    }

    function login(Request $request)
    {
        Session::flash('email', $request->email);
        Session::flash('success', 'Berhasil login!');
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($infologin)) {
            return redirect('admin')->with('success', Auth::user()->name .' Halo !');
        } else {
            return redirect('sesi')->with('error', 'Email dan password yang dimasukkan salah');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/')->with('success','Berhasil log out!');
    }
}