<?php

use App\Models\Employer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return view('personal.home');
})->name('personal.home');

// all the records
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(3);

    return view('jobs.index',[
        'jobs'=> $jobs
    ]);
})->name('jobs.index');

//create jobs
Route::get('/jobs/create',function(){
    return view('jobs.create');
});

// show
Route::get('/jobs/{job}',function(Job $job){
/*   $job = Job::find($job);  
We do not need to find the job using the id anymore,because we are using route model binding*/

    return view('jobs.show', ['job' => $job]);
});

// Store
Route::post('/jobs',function(Request $request){
    // validation
    $request->validate([
        'title'=> 'required|string|min:3',
        'salary'=> 'required|numeric'
    ]);

    Job::create([
        'title'=> request('title'),
        'salary'=> request('salary'),
        'employer_id'=> 1
    ]);

    return redirect('/jobs');
});

// edit job
Route::get('/jobs/{job}/edit',function(Job $job){
/*   $job = Job::find($job);  
We do not need to find the job using the id anymore,because we are using route model binding*/

    return view('jobs.edit', ['job' => $job]);
});

// update 
Route::patch('/jobs/{job}',function(Job $job, Request $request){
    // validation
    $request->validate([
        'title'=> 'required|min:3',
        'salary'=> 'required'
    ]);

    // authorization(on hold)..
    // update the job
    //! method 1
/*    $job = Job::findorFail($id); 
We do not need to find the job using the id anymore,because we are using route model binding*/

    // $job->title = $request('title');
    // $job->salary= $request('salary');
    // $job->save();

    //! method 2
    $job->update([
        'title'=> request('title'),
        'salary'=> request('salary')
    ]);
    // redirect to job page
    return redirect('/jobs/'.$job->id);
});

// delete
Route::delete('/jobs/{job}',function(Job $job){
    // autorize the req(on hold)

    // $job = Job::findorFail($id);
    $job->delete();

    return redirect('/jobs');
});

Route::get('/contact',function(){
    return view('personal.contact');
})->name('personal.contact');