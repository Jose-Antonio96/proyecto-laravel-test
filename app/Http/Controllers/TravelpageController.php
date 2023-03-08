<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Models\Tag;


class TravelpageController extends Controller
{
    public function travel(Request $request){


            $travel = Travel::whereId($request->travel)->get()->first();
            return view('traveliens.travelpage', compact('travel'));
        }

    public function createTravel(Request $request){

        if (!Auth::check())
            return redirect(route("login"));

            /* Esto es para testeo
        Log::info("hello");
        Log::info($request);
        */
        $data = $request->validate([
            'name' => 'required|max:100',
            'location' => 'required|max:40',
            'description' => 'required|max:3000',
            'image' => 'file',
            'starts' => 'date|after:tomorrow',
            'finishes' => 'date|after:start_date',
            'sponsored' => '',
            'professional' => '',
            'price' => 'required|max:10'
        ]);
        /*
        Log::info("world");
        Log::info($data);
        */
        $user = Auth::user();

        Travel::create($data['name'],
        $data['location'],
        $data['description'],
        $data['sponsored'] ?? "off",
        $data['image'] ?? null,
        $data['starts'] ?? null,
        $data['finishes'] ?? null,
        $data['professional'] ?? "off",
        $data['price'],
        $user);


        return redirect(route('account'))->with('status', 'success');
    }

    public function show(){
        $authedUser = Auth::user();

        $user = User::whereId($authedUser->id)->first();
    
        $travels = $user->Travel()->get("name", "location");

        return view('traveliens.travel-display', compact('travels'));
    }

    public function get_tags(Request $request){
        $tag = $request->validate(['tags'=>'']);

        Tag::store($tag['tags'] ?? "off");

        return redirect(route('account'))->with('status', 'success');
    }
}
