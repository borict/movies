@extends('layouts.master')
<h1>All movies</h1>
<ul>
@foreach ($movies as $movie)
    <li>
        <a href="{{ route('single-movie', ['id' => $movie->id]) }}">{{ $movie->title }}</a>
    </li>
    @endforeach
</ul>
