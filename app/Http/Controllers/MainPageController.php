<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MainPageController extends Controller
{
    public function inicio(Request $request){
        $travels = $this->displaytravels($request);
        return view('traveliens.mainpage', compact('travels'));
}
    public function displaytravels(Request $request){
        
    $travels = Travel::all();
        return $travels;
}

}
