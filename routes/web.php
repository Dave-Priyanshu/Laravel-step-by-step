<?php

use App\Models\Employer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){

    // Get all jobs with their employer
    // $jobs = Job::with('employer')->get();
    $jobs = Job::with('employer')->first();

    // $employers = Employer::with('jobs')->get();
    $employers = Employer::with('jobs')->first();

    return[
        'jobs' => $jobs,
        'employers' => $employers
    ];
    // $jobs = Job::all();
    // dd($jobs[0]->title);
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