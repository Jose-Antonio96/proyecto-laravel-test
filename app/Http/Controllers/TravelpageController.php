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

    public function store(Request $request){
        
        $request-> validate([
            'name' => ['required', 'max:100'],
            'location' => ['required', 'max:'],            'description' => ['required', 'max:
        ]);
        
        $travel = new Travel;
        $travel -> name = $request->input('name');
        $travel -> location = $request->input('location');
        $travel -> description = $request->input('description');
        $travel -> starts = $request->input('starts');
        $travel -> finishes = $request->input('finishes');
        $travel -> sponsored = $request->input('sponsored');
        $travel -> professional = $request->input('professional'); 
        $travel -> price = $request->input('price'); 

        $travel-> save();

        return view('traveliens.createtravel');
    }

    public function show(){
            $travel = Travel::paginate(5);


        return view('traveliens.travel-display', compact('travel'));
    }
}

