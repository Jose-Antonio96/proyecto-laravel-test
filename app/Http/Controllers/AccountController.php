<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\SaveUserRequest;
use Auth;

class AccountController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' =>['show']]);
    }

    public function update(User $user){

        return view('traveliens.update', ['user' => $user]);

    
    }

    public function edit(Request $request, User $user){
/*
        $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required'],
            'password' => ['required', 'min:8'],
        ]);
        

        $user->update($request->validate());
        */
        $user -> name = $request->input('name');
        $user -> email = $request->input('email');
        $user -> password = $request->input('password');
        $user -> save();
            

            /*
       $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);
        */

        
        /*
        session()->flash('status', 'Datos actualizados con éxito.');
        */
        return to_route('account', $user)->with('status', 'Datos actualizados con éxito.');
    }

    public function show(){

        $user = auth()->user();
            
        return view('traveliens.plantillausuario', compact('user')); 
    }

    public function delete(User $user){
        $user->delete();

        return view('traveliens.mainpage')->with('status', 'Cuenta eliminada con éxito');
    }
}


        

