<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function inicio(){
	    return view('traveliens.mainpage');
}

}
