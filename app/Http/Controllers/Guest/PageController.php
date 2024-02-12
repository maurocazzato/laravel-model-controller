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

        // Restituisci la vista con i dati dei film
        return view('pages.index', compact('movies'));
    }
}
