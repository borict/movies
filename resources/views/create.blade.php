@extends('layouts.master')
<form method="POST" action="/create"></form>
<form>
    <button type="submit">Create movie</button>
</form>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Avatar">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Director</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Christoper Nolan">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Genre</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Thriller">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Year</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="1999">
</div>
