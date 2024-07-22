<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        // Recupera tutti i film dal database
        $movies = Movie::all();

        // Passa i film alla vista
        return view('pages.welcome', compact('movies'));
    }
}
