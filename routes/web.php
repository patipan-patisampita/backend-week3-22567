<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//http://127.0.0.1:8000/
Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home');
Route::view('about', 'about');
Route::view('admin', 'admin.login');

//http://127.0.0.1:8000/user-home
Route::get('user-home', [UserController::class, 'userHome']);
Route::get('user-about/{user}', [UserController::class, 'userAbout']);
Route::get('admin-login', [UserController::class, 'adminLogin']);