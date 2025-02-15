<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;
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


Route::get('/job', function(){
        // $job = job::all();
        // dd($job[1]->title);
    $jobs = job::with('employer')->get();;
    return view('job',[
        'job' => $jobs
    ]);
});


Route::get('/contact', function(){
    return view('contact',[
        'contacts' => contact::pages()
    ]);
});

Route::get('/contacts/{id}', function ($id) {
    return view('contacts', ['contacts' => contact::find($id)] );
});
