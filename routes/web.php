<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function(){
    return view('About', [
        "title" => "About",
        "Nama" => "Favian Astama",  
        "Email" => "3103120090@student.smktelkom-pwt.sch.id",
        "Gambar" => "foto.jpeg "
    ]);
});

Route::get('/gallery', function(){
    return view('Gallery',[
        "title" => "Gallery"
    ]);
});

Route::resource('/contact', ContactController::class);