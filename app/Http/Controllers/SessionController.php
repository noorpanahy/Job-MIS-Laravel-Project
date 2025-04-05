<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){

        $attribute = request()->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required']
        ]);

        dd($attribute);

        if(! Auth::attempt($attribute)){
            throw ValidationException::withMessages([
                'email' => 'sorry, those credentials do not match.'
            ]);

        request()->session()->regenerate();

        return redirect('/jobs');

        }

        return view('auth.login');
    }

    public function destroy(){
        Auth::logout();
    }
}
