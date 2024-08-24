<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('index');
})->name('index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//LOGOUT
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');
