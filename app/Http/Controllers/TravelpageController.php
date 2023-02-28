<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TravelpageController extends Controller
{
    public function travel(Request $request){
        
        
            $travel = Travel::whereId($request->travel)->get()->first();
            return view('traveliens.travelpage', compact('travel'));   
        }

    public function createTravel(Request $request){
        
        if (!Auth::check())
            return redirect(route("login"));
        
        $data = $request-> validate([
            'name' => ['required', 'max:100'],
            'location' => ['required', 'max:40'],            
            'description' => ['required', 'max:3000'],
            'image' => ['required|file'],
            'starts' => ['required|date|after:tomorrow'],
            'finishes' => ['required|date|after:start_date'],
            'sponsored' => ['required|boolean'],
            'professional' => ['required|boolean'],
            'price' => ['required', 'max:10']

        ]);

        $user = Auth::user();

        Travel::create($data['name'], 
        $data['location'], 
        $data['description'], 
        $data['image'], 
        $data['starts'], 
        $data['finishes'], 
        $data['sponsored'], 
        $data['professional'], 
        $data['price'], 
        $user); 

        

        return redirect(route('createTravel'))->with('status', 'success');
    }

    public function show(){
            $travel = Travel::paginate(5);


        return view('traveliens.travel-display', compact('travel'));
    }
}

