@extends('layouts.app')

@section('content')

<div class="container">
	<h3>Edit Data Track</h3>
	<form action="{{ url('/track/' . $row->id) }}" method="POST">
		@method('patch')
		@csrf
		<div class="form-group">
			<label for="">Judul Track</label>
			<input type="text" class="form-control" required="required" name="name" value="{{ $row->name }}">
		</div>

		<div class="form-group">
			<label for="">Artist</label>
			<select name="artist_id" class="form-control">
				@foreach ($artists as $artist)
				<option value="{{ $artist->id }}"> {{ $artist->name }} </option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="">Album</label>
			<select name="album_id" class="form-control">
				@foreach ($albums as $album)
				<option value="{{ $album->id }}"> {{ $album->name }} </option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="">Time</label>
			<input type="text" class="form-control" required="required" name="time" value="{{ $row->time }}">
		</div>

		<div class="form-group">
			<label for="">Track</label>
			<input type="file" class="form-control" required="required" name="file" value="{{ $row->file }}">
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="UPDATE">
		</div>
	</form>
</div>

@endsection