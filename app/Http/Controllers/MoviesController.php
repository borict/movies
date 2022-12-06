<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Carbon\Carbon;
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
    //
    public function store(Request $request) {
        $now = new Carbon();
        $year = $now->year;
        $rules = Movie::STORE_RULES;
        $rules['year'] = str_replace('$year', $year, $rules['year']);
    	$request->validate($rules);
    	$movie = Movie::create($request->all());
    	return view('movies.show', compact('movie'));
    }


}
