<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{

    //Aquí van las funciones
    public function __invoke(){
        //return view('welcome');
        //return "Bienvenido!";
        
        $usuario = User::paginate(10);
        
        return view('traveliens.home', compact('usuario'));
    }   
}

