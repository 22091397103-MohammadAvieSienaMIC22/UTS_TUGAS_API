<?php

use App\Http\Controllers\AddresssController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'title' => 'Laravel 11 | API'
    ]);
});

//Route Register
Route::get('register', [UserController::class, 'register'])->name('register')->middleware('guest');
Route::post('register', [UserController::class, 'register_store']);

//Route login
Route::get('login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [UserController::class, 'login_authenticate']); //nama bebas bagian autenticate
Route::post('logout', [UserController::class, 'logout']); //nama bebas bagian autenticate

//Route Dashboard
Route::get('dashboard', function() {
    return view('dashboard.index');

})->name('dashboard')->middleware('auth');

//Route user
Route::get('dashboard/user', [UserController::class, 'index'])->middleware('auth');
Route::get('dashboard/user/{user}', [UserController::class, 'show'])->middleware('auth');
Route::get('dashboard/user/{user}/edit', [UserController::class, 'edit'])->middleware('auth');
Route::delete('dashboard/user/{user}', [UserController::class, 'destroy'])->middleware('auth');

//Route Contact
Route::resource('dashboard/contact', ContactController::class)->middleware('auth');

//Route Address
Route::resource('dashboard/addresss', AddresssController::class)->middleware('auth');
