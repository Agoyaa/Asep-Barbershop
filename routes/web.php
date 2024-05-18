<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/contact', [BookingController::class, 'create'])->name('booking.contact');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/admin', [BookingController::class, 'index'])->name('admin');

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);

Route::get('/', function () {
    return view('welcome',[
        'title' => 'home'
    ]);
});

Route::get('/location', function () {
    return view('location',[
        'title' => 'location'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title' => 'about'
    ]);
});

Route::get('/career', function () {
    return view('career',[
        'title' => 'career'
    ]);
});

// Route::get('/contact', function () {
//     return view('contact',[
//         'title' => 'contact'
//     ]);
// });

Route::get('/gallery', function () {
    return view('gallery',[
        'title' => 'gallery'
    ]);
});

Route::get('/tren', function () {
    return view('tren',[
        'title' => 'tren'
    ]);
});
