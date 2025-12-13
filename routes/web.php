<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register',[AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register',[AuthController::class, 'Register'])->name('register');

Route::get('/login',[AuthController::class, 'showLogin'])->name('login');
Route::post('/login',[AuthController::class, 'performLogin'])->name('login.submit');

Route::post('/logout',[AuthController::class,'logout'])->name('logout');


Route::view('home', 'home'); #this is my first project
Route::view('about', 'about'); #this is my second project
Route::view('projects', 'projects'); #this is my third project
Route::view('contact', 'contact'); #this is my fourth project
Route::view('dashboard', 'admin.dashboard')->middleware('auth')-> name('dashboard'); #this is my admin dashboard