<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return view('personal.home');
})->name('personal.home');


Route::get('/jobs',[JobController::class,'index'])->name('jobs.index');;
Route::get('/jobs/create',[JobController::class,'create']);
Route::get('/jobs/{job}',[JobController::class,'show']);
Route::post('/jobs',[JobController::class,'store']);
Route::get('/jobs/{job}/edit',[JobController::class,'edit']);
Route::patch('/jobs/{job}',[JobController::class,'update']);
Route::delete('/jobs/{job}',[JobController::class,'destroy']);

Route::get('/contact',function(){
    return view('personal.contact');
})->name('personal.contact');