<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){

        $attributes = request()->validate([
            'user_name'   => ['required'],
            'last_name'   => ['required'],
            'email'       => ['required', 'email'],
            'password'    => ['required', Password::min(4), 'confirmed']
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/jobs');
    }
}
