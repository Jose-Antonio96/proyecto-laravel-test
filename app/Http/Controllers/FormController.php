<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create(){
        return view('traveliens.form');
    }

    public function save(Request $request){

        $request -> validate([
            'name' => ['required', 'min:4'], 
            'email' => ['required', 'email:rfc,dns'],
            'password' => ['required', 'min:8']
            ]);

        $account = new User;
        $account -> name = $request->input('name');
        $account -> email = $request->input('email');
        $account -> password = $request->input('password');
        $account -> save();

        session()->flash('status', 'Cuenta creada con éxito.');

        return to_route('account');
    }
}
