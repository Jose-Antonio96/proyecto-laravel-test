<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;


class BackendController extends Controller
{
    public function index(){
        $tags = Tag::paginate(10);
        return view('traveliens.backend', compact('tags'));
    }

    public function show(Tag $tag){
        return view('traveliens.backend_tags', ['tag' => $tag]);
    }

    public function edit(Request $request, Tag $tag){
        $tag -> tags = $request->input('tags');

        $tag -> save();
        return redirect()->route('backend.index', $tag)->with('status', 'Datos actualizados con éxito.');
    }
    public function create(Request $request){
        $tag = new Tag;
        $tag -> tags = $request->input('tags');
        $tag->save();
        
        return redirect()->route('backend.index')->with('status', 'Tag creado con éxito.');
    }

    public function delete(Tag $tag){
        $tag->delete();

        return redirect()->route('backend.index')->with('status', 'Tag eliminado con éxito');
    }
}
