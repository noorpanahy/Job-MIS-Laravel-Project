<?php

use App\Http\Controllers\ContactController;
use App\Models\Job;
use App\Models\contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

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

Route::view('/', 'home');

Route::resource('jobs', JobController::class);



Route::controller(ContactController::class)->group(function(){
    Route::get('/contact', 'contact');
    Route::get('/contacts/{id}', 'contacts');

});



// Route::get('/contacts/{id}', function($id){
//     return view('contacts', ['contacts' => contact::find($id)] );
// });

// Route::get('/contact', function(){
//     return view('contact',[
//         'contacts' => contact::pages()
//     ]);
// });

