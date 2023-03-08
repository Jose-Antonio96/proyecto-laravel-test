<?php

namespace App\Http\Controllers;
use App\Models\Tag;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        return view('traveliens.backend');
    }

    public function show(){
        $tags = Tag::paginate(10);
        return view('traveliens.backend_tags', compact('tags'));
    }
}
