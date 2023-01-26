<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DBController extends Controller{
       // Creamos un método para atender la peticion llamado show
    public function show($id)
    {
        // Buscamos el id en la tabla
        $usuario = User::find($id);
        // retornamos la vista con los datos 
        return view('traveliens.plantilla', compact('usuario'));
        // el primer parámetros es el nombre con el que estará disponible en la vista
        // el segundo son los datos. 
        }
    }

