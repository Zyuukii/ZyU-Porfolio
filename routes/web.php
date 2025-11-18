<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('/home');
}); #default landing page

Route::get('/register',[AuthController::class, 'showRegister'])->name('register.form'); 
Route::get('/register',[AuthController::class, 'performRegister'])->name('register');

Route::get('/login',[AuthController::class, 'showlogin'])->name('login.form');
Route::get('/login',[AuthController::class, 'performlogin'])->name('login');
    
Route::get('/logout', function(){

});


Route::view('home', 'home'); #this is my first project
Route::view('about', 'about'); #this is my second project
Route::view('projects', 'projects'); #this is my third project