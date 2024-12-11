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

// single record
Route::get('/jobs/{id}',function($id){
  $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

// create post route
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
Route::get('/jobs/{id}/edit',function($id){
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

// update 
Route::patch('/jobs/{id}',function($id, Request $request){
    // validation
    $request->validate([
        'title'=> 'required|string|min:3',
        'salary'=> 'required'
    ]);

    // authorization(on hold)..
    // update the job
    //! method 1
    $job = Job::findorFail($id);
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
Route::delete('/jobs/{id}',function($id){
    // autorize the req(on hold)

    $job = Job::findorFail($id);
    $job->delete();

    return redirect('/jobs');
});

Route::get('/contact',function(){
    return view('personal.contact');
})->name('personal.contact');