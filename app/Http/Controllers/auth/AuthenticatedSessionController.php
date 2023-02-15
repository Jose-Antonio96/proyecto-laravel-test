<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request){
        
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);
        
        if( ! Auth::attempt(
            $credentials, $request->boolean('remember')
        )){
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }
        
    }

}