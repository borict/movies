<h1>Movie</h1>
<h2>{{ $movie->title }}</h2>
<a href="/users/{{ $movie->title }}"></a>

@foreach(explode(', ',($movie->genre),100) as $genre)
    <a href = "{{route('genre-movies', ['genre' => $genre])}}">{{$genre}}</a>
@endforeach

<p>Director: {{$movie->director}}</p>
<p>Storyline: {{$movie->storyline}}</p>

@if(count($movie->comments))
    <p><br><strong>Comments:</strong><br></p>
    <ul>
    @foreach($movie->comments as $comment)
        <li>
        <p>{{ $comment->content }}</p>
        <p>{{ $comment->created_at }}</p>
        </li>
    @endforeach
    </ul>
@endif

<form method="POST" action="{{ url('/comments/add/' . $movie->id) }}">
    {{ csrf_field() }}
        <label for="content">Comment</label>
        <input type="text" id="content" name="content"/>
        <button type="submit">Add comment</button>
</form>
