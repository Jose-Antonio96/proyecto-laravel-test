<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SearchPageController extends Controller
{
    public function BDsearch(){
        $usuario = User::paginate(10);
        
        return view('traveliens.searchpage', compact('usuario'));   
    }
}
