<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{

    //Aquí van las funciones
    public function __invoke(){
        //return view('welcome');
        //return "Bienvenido!";

        return view('traveliens.home');
    }
}