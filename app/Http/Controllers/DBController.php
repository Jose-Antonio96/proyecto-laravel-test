<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DBController extends Controller{
       
    public function show($name)
    {
        $usuario = User::where('name', $name)->get();
        return view('traveliens.dbuser', compact('usuario'));   
    }
}