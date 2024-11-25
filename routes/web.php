<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return view('personal.home');
})->name('personal.home');

Route::get('/jobs', function () {
    return view('personal.jobs',[
        'jobs'=> Job::all()
    ]);
})->name('personal.jobs');

Route::get('/jobs/{id}',function($id){
  $job = Job::find($id);
  
    return view('personal.job', ['job' => $job]);
});

Route::get('/contact',function(){
    return view('personal.contact');
})->name('personal.contact');