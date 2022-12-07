@extends('layouts.master')
<form method="POST" action="/movies">
    @csrf
    <div>
        <br>
        <label>Title:   </label>
        <input type="text" name="title"><br><br>

        <label>Genre:   </label>
        <input type="text" name="genre"><br><br>

        <label>Director:    </label>
        <input type="text" name="director"><br><br>

        <label>Year:    </label>
        <input type="int" name="year"><br><br>

        <label>Storyline:    </label>
        <input type="text" name="storyline"><br><br>

        <button type="submit">Create movie</button><br><br>
    </div>
</form>
