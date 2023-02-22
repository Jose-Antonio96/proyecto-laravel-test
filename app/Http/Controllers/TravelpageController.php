<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class TravelpageController extends Controller
{
    public function travel($name){
        $name = Travel::where('name', $name)->get();
        return view('traveliens.travelpage', compact('name'));
    }
}
