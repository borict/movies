<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('index', compact('movies'));
    }
    public function show($id){
        $movie = Movie::find($id);
        return view('show', compact('movie'));
    }
    public function create()
    {
        return view('create');
    }
    public function store()
    {
        $this->validate(
            request(),
            [
                'title' => 'required|max:20',
                'body' => 'required'
            ]
        );
    }
}
