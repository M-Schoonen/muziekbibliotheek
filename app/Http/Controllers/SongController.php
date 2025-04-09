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
        echo "Titel: " . $request->input('title') . "<br>";
        echo "Artiest: " . $request->input('artist') . "<br>";
        echo "Jaar: " . $request->input('year') . "<br>";
    }
}