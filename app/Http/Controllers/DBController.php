<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DBuserresult extends Controller{
       
    public function show($id)
    {
        $usuario = User::whereId($id)->get()->first();
        return view('traveliens.dbuser', compact('usuario'));   
    }
    
}