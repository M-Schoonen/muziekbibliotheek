<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function show()
    {
        return view('songs');
    }

    public function create()
    {
        return view('newsong');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3|max:32',
            'artist' => 'required|min:6|max:32',
            'year' => 'required|integer',
        ]);

        echo "Titel: " . $request->input('title') . "<br>";
        echo "Artiest: " . $request->input('artist') . "<br>";
        echo "Jaar: " . $request->input('year') . "<br>";
    }
}