<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()) {
            return $next($request);
        }

        // Jika tidak terotentikasi, arahkan ke halaman login
        if (!Auth::check()) {
            return redirect()->route('login');        }

        // Jika bukan admin, arahkan ke halaman beranda
        return redirect('/');
    }
}
