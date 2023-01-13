<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchPageController extends Controller
{
    public function search($nomviaje=null){
        if($nomviaje){
            return view("seccion.show", ['seccion' => $seccion, 'subseccion' => $subseccion]);
        }else{
            return view('seccion.seccionbase', ['seccion' => $seccion]);
            }
        }
    }


