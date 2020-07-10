@extends('layouts.app')

@section('content')

<div class="container">
	<h3>Edit Data Album</h3>
	<form action="{{ url('/album/' . $row->id) }}" method="POST">
		@method('patch')
		@csrf
		<div class="form-group">
			<label for="">Artist</label>
			<select name="artist_id" class="form-control">
				@foreach ($artists as $artist)
				<option value="{{ $artist->id }}"> {{ $artist->name }} </option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="">Nama Album</label>
			<input type="text" class="form-control" required="required" name="name" value="{{ $row->name }}">
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="UPDATE">
		</div>
	</form>
</div>

@endsection