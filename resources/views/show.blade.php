<h2>Movie</h2>
<div class="blog-post">
    <h2 class="blog-post-title">{{ $movie->title }}</h2>
        <a href="/users/{{ $movie->title }}"></a>
        <p>Genre: {{$movie->genre}}</p>
        <p>Director: {{$movie->director}}</p>
        <p>Storyline: {{$movie->storyline}}</p>
    </p>
