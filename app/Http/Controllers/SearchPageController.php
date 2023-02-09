<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class SearchPageController extends Controller
{
    public function index(){

        $travel = Travel::paginate(10);
            
            return view('traveliens.searchpage', compact('travel')); 
    }


    public function show($id){
        return Travel::find($id);
    }
}
