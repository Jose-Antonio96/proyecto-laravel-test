<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SaveUserRequest;

class FormController extends Controller
{
    public function create(){
        return view('traveliens.form', ['user' => new User()]);
    }

    public function save(SaveUserRequest $request){

        

        /*
        $account = new User;
        $account -> name = $request->input('name');
        $account -> email = $request->input('email');
        $account -> password = $request->input('password');
        $account -> save();
        */
        User::create($request->validated());

        /*
        session()->flash('status', 'Cuenta creada con éxito.');
        */
        return to_route('account')->with('status', 'Cuenta creada con éxito.');
    }
}
