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
        Session::flash('name', $request->name);
        Session::flash('success', 'Berhasil login!');
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ], [
            'name.required' => 'Email is required',
            'password.required' => 'Password is required',
        ]);

        $infologin = [
            'name' => $request->name,
            'password' => $request->password
        ];
        if (Auth::attempt($infologin)) {
            return redirect('admin')->with('success', Auth::user()->name .' Halo !');
        } else {
            return redirect('sesi')->with('error', 'Nama atau password yang dimasukkan salah');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/')->with('success','Berhasil log out!');
    }
}