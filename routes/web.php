<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\contact;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function(){
        // $job = Job::all();
        // dd($job[1]->title);
    $job = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index',[
        'jobs' => $job
    ]);
});

Route::get('/jobs/create', function(){
    return view('jobs.create');
});

Route::get('/jobs/{id}', function($id){
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function(){
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
});


Route::get('/contact', function(){
    return view('contact',[
        'contacts' => contact::pages()
    ]);
});

Route::get('/contacts/{id}', function ($id) {
    return view('contacts', ['contacts' => contact::find($id)] );
});
