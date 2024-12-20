<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisteredUserController;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::view('/','personal.home')->name('personal.home');

Route::get('/contact',function(){return view('personal.contact');})->name('personal.contact');

// Route::resource('/jobs',JobController::class);
Route::controller(JobController::class)->group(function (){

    Route::get('/jobs','index');
    Route::get('/jobs/create','create');  
    Route::get('/jobs/{job}','show');
    Route::post('/jobs','store')->middleware('auth');

    Route::get('/jobs/{job}/edit','edit')
        ->middleware('auth')
        ->can('edit','job');

    Route::patch('/jobs/{job}','update')
        ->middleware('auth')
        ->can('edit','job');
        
    Route::delete('/jobs/{job}','destroy')
        ->middleware('auth')
        ->can('edit','job');
});


// Auth controller

Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);


Route::get('/login',[LoginUserController::class,'create']);
Route::post('/login',[LoginUserController::class,'store']);
Route::post('/logout',[LoginUserController::class,'destroy']);