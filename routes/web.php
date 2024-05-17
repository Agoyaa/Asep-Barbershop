<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

Route::get('/contact', function () {
    return view('contact',[
        'title' => 'contact'
    ]);
});

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
Route::get('/admin', function () {
    return view('auth',[
        'title' => 'login'
    ]);


Route::resource('/news', NewsController::class);

});