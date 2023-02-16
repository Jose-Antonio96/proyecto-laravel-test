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

        if($request->name){
            $travel = Travel::where('name', 'LIKE', '%'.$request->name.'%')->latest()->paginate(15);
    

        return view('traveliens.searchpage', compact('travel'));
    }else{
        return redirect()->back()->with('message', "Búsqueda vacia");
    }
 
    }
}
