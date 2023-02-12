<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    public function login(){
        
    }

    public function update(){
    }

    public function show(){

        $users = User::paginate(10);
            
        return view('traveliens.plantillausuario', compact('users')); 
    }
}


        

