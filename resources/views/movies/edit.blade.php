<h1>Modifica i dettagli del film: {{ $movie->title }}</h1>

<div>
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
	@endif
</div>

<div>
	<form action="{{ route('movies.update', $movie->id) }}" method="post">
		@csrf
		@method('PUT')

		<div>
			<label>Title</label>
			<input type="text" name="title" value="{{ $movie->title }}">
		</div>

		<div>
			<label>Description</label>
			<textarea name="description" rows="8" cols="80">{{ $movie->description }}</textarea>
		</div>

		<div>
			<label>Year</label>
			<input type="number" name="year" value="{{ $movie->year }}">
		</div>

		<div>
			<label>Rating</label>
			<input type="text" name="rating" value="{{ $movie->rating }}">
		</div>

		<div>
			<input type="submit" value="Save">
		</div>
	</form>
</div>
