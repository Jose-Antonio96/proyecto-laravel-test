<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;



class TravelpageController extends Controller
{
    public function travel($id){
        $user = DB::table('travels')
                ->leftJoin('users', 'travels.user_id', '=', 'users.id')
                ->select('users.name')
                ->where('travels.id', '=', $id)
                ->first();
      
        $travel = Travel::find($id);
      
        return view('traveliens.travelpage', [
          'travel' => $travel,
          'user' => $user
        ]);
      }
      
/* Esto es para testeo
        Log::info("hello");
        Log::info($request);
        
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
        public function createTravel(Request $request)
{
    $tags = $request->input('tags');

    if (!Auth::check()) {
        return redirect(route("login"));
    }

    $user_id = Auth::id();

    $travel = new Travel();
    $travel->name = $request->name;
    $travel->location = $request->location;
    $travel->description = $request->description;
    $imageName = time().'.'.$request->image->extension();

    // Mover la imagen a la carpeta 'images' en la carpeta 'public'
    $request->image->move(public_path('images/'), $imageName);
    $travel->image = $imageName;
    $travel->user_id = $user_id;
    $travel->starts = $request->starts;
    $travel->finishes = $request->finishes;

    $travel->save();

    // Asociar las etiquetas seleccionadas con el viaje
    $travel->tags()->sync($tags);

    return redirect(route('account'))->with('status', 'Viaje creado con éxito');
}

        
    public function show(){
        $authedUser = Auth::user();
        
        $travels = Travel::where('user_id', $authedUser->id)->get();
    

        return view('traveliens.travel-display', compact('travels'));
    }

    public function get_tags(Request $request){
        $tag = $request->validate(['tags'=>'']);

        Tag::store($tag['tags'] ?? "off");

        return redirect(route('account'))->with('status', 'success');
    }

    public function joinTravel(Request $request){
        if (Auth::check()){

    $user_id = Auth::id();
    $travel_id = $request->input('travel_id');
         // Obtiene el ID del usuario y el ID del viaje de la solicitud POST


    // Asigna el viaje al usuario
    $user = User::find($user_id);
    $user->travel()->attach($travel_id);


    return redirect(route('account'))->with('status', 'Apuntado al viaje con éxito');
        }
    }


    // Get the authenticated user's ID
    public function userTravels(){

        // Get the authenticated user's ID
        $user_id = Auth::id();
    
        // Get the travels that the user has joined
        $joined_travels = User::find($user_id)->travel;
    
        // Get the travels that the user has created
        $created_travels = Travel::where('user_id', $user_id)->get();
    
        // Return both sets of travels to the view
        return view('traveliens.usertravels', [
            'joined_travels' => $joined_travels,
            'created_travels' => $created_travels
        ]);
    }
    

    public function displaytravels(Request $request){
        
        $travels = Travel::all();
        return view('traveliens.mainpage', compact('travels'));
    }

    public function createTrav(){
        $tags = Tag::pluck('tags', 'id');
        return view('traveliens.createtravel', ['tags' => $tags]);
    }
    
    
}




    