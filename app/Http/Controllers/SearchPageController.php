<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;
use App\Models\Tag;

class SearchPageController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view('traveliens.searchpage', ['tags' => $tags]);
    }

    public function result(Request $request)
    {
        $tags = Tag::all();

        $query = Travel::query()
            ->where('name', 'LIKE', "%{$request->input('name')}%")
            ->when($request->input('starts'), function ($query, $startRange) {
                return $query->where('starts', '>=', $startRange);
            })
            ->when($request->input('finishes'), function ($query, $endRange) {
                return $query->where('finishes', '<=', $endRange);
            });

            if ($request->has('tags')) {
                $selectedTags = $request->input('tags');
                $query->whereHas('tags', function ($query) use ($selectedTags) {
                    $query->whereIn('tags.id', $selectedTags);
                });
            }            

        $travel = $query->paginate(10);

        return view('traveliens.searchpage', compact('travel', 'tags'));
    }
}

