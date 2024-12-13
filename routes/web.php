<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','personal.home')->name('personal.home');

Route::get('/contact',function(){return view('personal.contact');})->name('personal.contact');

Route::resource('/jobs',JobController::class)->middleware('auth');
// Route::controller(JobController::class)->group(function (){

//     Route::get('/jobs','index');
//     Route::get('/jobs/create','create');  
//     Route::get('/jobs/{job}','show');
//     Route::post('/jobs','store');
//     Route::get('/jobs/{job}/edit','edit');
//     Route::patch('/jobs/{job}','update');
//     Route::delete('/jobs/{job}','destroy');
// });


// Auth controller

Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);


Route::get('/login',[LoginUserController::class,'create']);
Route::post('/login',[LoginUserController::class,'store']);
Route::post('/logout',[LoginUserController::class,'destroy']);