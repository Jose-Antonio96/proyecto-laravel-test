<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Console\View\Components\Warn;
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
        $request->session()->regenerate();
        //Genera una nueva sesión
        return redirect()->intended()
        ->with('status', "Sesión iniciada con éxito.");
        //Esto nos redirecciona de vuelta a la página en la que estabamos y que nos pedía logearnos
        
    }

    public function destroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')
        ->with('status', "Sesión cerrada con éxito.");
    }

}