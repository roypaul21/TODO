<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/*HOME PAGE ROUTE*/
Route::get('/', [ HomeController::class,'index']);

/*LOGIN REQUEST POST*/


/*REGISTER REQUEST POST*/
Route::post('/register', [AuthController::class,'registerPost'])->name('register');

