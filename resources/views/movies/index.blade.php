<div>
	<h1>Lista dei film:</h1>

	<ul>
		@foreach ($movies as $movie)
			<li>
				{{ $movie->title }} &nbsp;
				<a href="{{ route('movies.show', $movie->id) }}">Visualizza i dettagli</a>&nbsp;
				<a href="{{ route('movies.edit', $movie->id) }}">Modifica i dati del film</a>

				<form action="{{ route('movies.destroy', $movie->id) }}" method="post">
					@csrf
					@method('DELETE')

					<input type="submit" value="Elimina">
				</form>
			</li>
		@endforeach
	</ul>

	<a href="{{ route('movies.create') }}">Inserisci un nuovo film</a>

</div>
