<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\contact;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $job = JOB::with('employer')->latest()->simplePaginate(3);
        return view('jobs.index',[
            'jobs' => $job
        ]);
    }

    public function create(){
        return view('jobs.create');
    }

    public function show(Job $job){
        return view('jobs.show', ['job' => $job]);
    }

    public function store(Job $job){
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);


        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        return redirect('/jobs');
    }

    public function edit(Job $job){
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job){
            // validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);


    // autorize later on


    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $job->id );
    }

    public function destroy(Job $job){
            // authorize on hold
    $job->delete();
    return redirect('/jobs');
    }
}
