<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/" , [MakeController::class , "Landingpage"]);
Route::get("/Faq" , [MakeController::class , "Faq"]);
Route::get("/TermsAndCondition" , [MakeController::class , "TermsAndCondition"]);

Route::get("/Home" , [MakeController::class , "Home"]);
Route::get("/Aboutus" , [MakeController::class , "Aboutus"]);
Route::get("/Contactus" , [MakeController::class , "Contactus"]);
Route::get("/Service" , [MakeController::class , "Service"]);

Route::get("/CleaningPackage" , [MakeController::class , "CleaningPackage"]);
Route::get("/PlumbingPackage" , [MakeController::class , "PlumbingPackage"]);
Route::get("/ElectricalPackage" , [MakeController::class , "ElectricalPackage"]);
Route::get("/DevicePackage" , [MakeController::class , "DevicePackage"]);

Route::get("login" , [MakeController::class , "login"])->name('login');;
Route::get("register" , [MakeController::class , "register"])->name('register');

