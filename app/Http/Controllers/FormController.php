<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create(){
        return view('traveliens.form');
    }

    public function save(Request $request){

        $account = new User;
        $account -> name = $request->input('name');
        $account -> email = $request->input('email');
        $account -> password = $request->input('password');
        $account -> save();
        return to_route('account') ;
    }
}
