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
    $job = Job::with('employer')->get();
    return view('jobs',[
        'jobs' => $job
    ]);
});

Route::get('/jobs/{id}', function($id){
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});


Route::get('/contact', function(){
    return view('contact',[
        'contacts' => contact::pages()
    ]);
});

Route::get('/contacts/{id}', function ($id) {
    return view('contacts', ['contacts' => contact::find($id)] );
});
