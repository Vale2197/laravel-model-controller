<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class routeController extends Controller
{
    public function home() 
    {
        $movies = Movie::all();
        
        return view('home', compact('movies'));
    }
}
