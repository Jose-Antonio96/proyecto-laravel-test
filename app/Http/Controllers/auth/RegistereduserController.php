<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\SaveUserRequest;

class RegisteredUserController extends Controller
{
    public function store(SaveUserRequest $request){
        /*
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]); 
       */

        User::create($request->validated());
        
        /*
        Auth::login($user);
        */
        return to_route('login')->with('status', 'Cuenta creada con éxito');
    }
}

