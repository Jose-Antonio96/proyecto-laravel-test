<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DBController extends Controller
{
    public function DBdata($usuario){
        return "Hola $usuario!";
    }   
}
