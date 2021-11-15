<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcom', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index-3');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/doctor-dashboard', function () {
    return view('doctors.doctor-dashboard');
});
Route::get('/appointments', function () {
    return view('doctors.appointments');
});
Route::get('/doctor-profile', function () {
    return view('doctors.doctor-profile');
});
Route::get('/doctor-change-password', function () {
    return view('doctors.doctor-change-password');
});
Route::get('/doctor-profile-settings', function () {
    return view('doctors.doctor-profile-settings');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
