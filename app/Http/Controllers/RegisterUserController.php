<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){

        $attributes = request()->validate([
            'first_name'  => ['required'],
            'last_name'   => ['required'],
            'email'       => ['required', 'email'],
            'password'    => ['required', Password::min(4), 'confirmed']

        ]);

        dd($attributes);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/jobs');
    }
}
