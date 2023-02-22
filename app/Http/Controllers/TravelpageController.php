<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class TravelpageController extends Controller
{
    public function travel($name){
        
            $travel = Travel::whereId($name)->get()->first();
            return view('traveliens.travelpage', compact('travel'));   
        }
}
