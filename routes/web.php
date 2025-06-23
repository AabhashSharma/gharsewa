<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("Landingpage" , [MakeController::class , "Landingpage"]);
Route::get("login" , [MakeController::class , "login"])->name('login');;
Route::get("register" , [MakeController::class , "register"])->name('register');