<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::with('employer')->latest()->paginate(3);

        return view('jobs.index',[
            'jobs'=> $jobs
        ]);
    }

    public function create(){
        return view('jobs.create');
    }

    public function show(Job $job){
        return view('jobs.show', ['job' => $job]);
    }
  
    public function store(Request $request){
        // validation
    $request->validate([
        'title'=> 'required|string|min:3',
        'salary'=> 'required|numeric'
    ]);

    $job = Job::create([
        'title'=> request('title'),
        'salary'=> request('salary'),
        'employer_id'=> 1
    ]);
    Mail::to($job->employer->user)->send(
        new JobPosted($job)
    );

    return redirect('/jobs');
    }

    public function edit(Job $job){
        /*   $job = Job::find($job);  
        We do not need to find the job using the id anymore,because we are using route model binding*/
        // if(Auth::guest()){
        //     return redirect('/login');
        // }
        
        // Gate::authorize('edit-job',$job);

        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Request $request, Job $job){
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
        // ! method 2 to update jobs
        // $job->update($request->all());
        
        //! method 3
        $job->update([
            'title'=> request('title'),
            'salary'=> request('salary')
        ]);
        // redirect to job page
        return redirect('/jobs/'.$job->id);

    }

    public function destroy(job $job){
        // autorize the req(on hold)

        // $job = Job::findorFail($id);
        $job->delete();

        return redirect('/jobs');
    }
}

