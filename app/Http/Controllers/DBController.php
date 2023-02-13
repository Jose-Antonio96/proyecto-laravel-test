<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DBController extends Controller{
       
    public function show($id)
    {
        $user = User::whereId($id)->get()->first();
        return view('traveliens.dbuser', compact('user'));   
    }
    
}