<?php

use App\Models\Employer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Tag;
use PhpParser\Node\Stmt\Return_;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){

    // Get all jobs with their employer
    // $jobs = Job::with('employer')->get();
    // $jobs = Job::with('employer')->first();

    // $employers = Employer::with('jobs')->get();
    // return[
    //     'jobs' => $jobs,
    //     'employers' => $employers
    // ];
    // $employers = Employer::with('jobs')->first();

    // //fetch perticular user
    // $employers = Employer::find(3);

    // //fetch all the jobs of that user
    // $jobs = $employers->jobs;

    // foreach($jobs as $job){
    //     echo $job. "<br>";
    // }

    // ! tags
    $jobs = Job::find(1);
    $tags = $jobs->tags;

    $findtags = Tag::find(2);
    $findjobs = $findtags->jobs;

    return $findtags;    

    // return[
    //     'jobs'=>$jobs
    // ];

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