<h1>{{ $movie->title }}</h1>

<ul>
	<li>Descrizione: {{ $movie->description }}</li>
	<li>Anno: {{ $movie->year }}</li>
	<li>Rating: {{ $movie->rating }}</li>
</ul>

<a href="{{ route('movies.index') }}">Torna alla lista</a>
