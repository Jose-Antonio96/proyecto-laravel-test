<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class TravelpageController extends Controller
{
    public function travel(Request $request){
        
        
            $travel = Travel::whereId($request->travel)->get()->first();
            return view('traveliens.travelpage', compact('travel'));   
        }
}
