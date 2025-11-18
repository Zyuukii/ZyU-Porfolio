<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/home');
}); #default landing page


#Route::view('home', 'home'); #this is my first project
Route::view('about', 'about'); #this is my second project
Route::view('projects', 'projects'); #this is my third project