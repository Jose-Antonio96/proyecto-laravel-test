<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function account($nomusuario=null){
        if($nomusuario){
            return view('traveliens.usuario', ['usuario' => $nomusuario]);
        }else{
            return ('usuario');
        }
    }
}

