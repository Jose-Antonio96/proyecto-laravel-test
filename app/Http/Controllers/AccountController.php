<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\SaveUserRequest;

class AccountController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' =>['show']]);
    }

    public function login(){
        
    }

    public function update(User $user){
        return view('traveliens.update', ['user' => $user]);

    
    }

    public function edit(SaveUserRequest $request, User $user){

        $user->update($request->validated());
        //$account = User::find($user); No necesitamos esta línea teniendo el User $user
        /*
        $user -> name = $request->input('name');
        $user -> email = $request->input('email');
        $user -> password = $request->input('password');
        $user -> save();
            */

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

        $users = User::paginate(10);
            
        return view('traveliens.plantillausuario', compact('users')); 
    }

    public function delete(User $user){
        $user->delete();

        return to_route('account')->with('status', 'Cuenta eliminada con éxito');
    }
}


        

