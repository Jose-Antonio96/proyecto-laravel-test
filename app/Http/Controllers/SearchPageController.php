<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class SearchPageController extends Controller
{
    public function index(){

        return view('traveliens.searchpage'); 
    }

    public function result(Request $request){

        $travel = $request->input('searchpage.result');

        $travel = Travel::query()
        ->where('name', 'LIKE', "%{$travel}%")
        ->get();
        
            
        return view('searchpage.result', compact('travel'));
    
 
    }
}
