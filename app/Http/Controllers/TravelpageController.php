<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;
use App\Http\Controllers\Auth;

class TravelpageController extends Controller
{
    public function travel(Request $request){
        
        
            $travel = Travel::whereId($request->travel)->get()->first();
            return view('traveliens.travelpage', compact('travel'));   
        }

    public function store(Request $request){
        
        $request-> validate([
            'name' => ['required', 'max:100'],
            'location' => ['required', 'max:'],            
            'description' => ['required', 'max:'],
            '' => ['required', 'max:'],
            '' => ['required', 'max:'],
            '' => ['required', 'max:'],
            '' => ['required', 'max:'],

        ]);
        
        $travel = new Travel;
        $travel -> name = $request->input('name');
        $travel-> user_id = $request -> Auth::user()->id;
        $travel-> tags_id = $request-> tags_id;
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

