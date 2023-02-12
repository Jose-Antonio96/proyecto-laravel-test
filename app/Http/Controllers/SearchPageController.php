<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class SearchPageController extends Controller
{
    public function index(){

        $travels = Travel::paginate(10);
            
            return view('traveliens.searchpage', compact('travels')); 
    }


    public function show($id){
        return Travel::find($id);
    }
}
