<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeccionController extends Controller
{
    public function index(){
		return view('seccion.home');
}

public function create(){
		return view('seccion.create');
}

public function usuario(){
  return view('seccion.usuario');
}

public function show($seccion, $subseccion=null){
    if($subseccion){
		return view("seccion.show", ['seccion' => $seccion, 'subseccion' => $subseccion]);
    }else{
        return view('seccion.seccionbase', ['seccion' => $seccion]);
        /*
        return ("Aquí no hay subcessiones");
        */
        }
    }
}