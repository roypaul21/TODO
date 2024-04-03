<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/*HOME PAGE ROUTE*/
Route::get('/', [ HomeController::class,'index']);

/*LOGIN REQUEST POST*/
Route::post('/login', [HomeController::class,'loginPost'])->name('login.post');

/*REGISTER REQUEST POST*/
Route::post('/register', [HomeController::class,'registerPost'])->name('register.post');

