@extends('layouts.app')

@section('content')

<div class="container">
	<h3>Tambah Data Played</h3>
	<form class="" action="{{ url('/played') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="">Nama Artist</label>
			<select name="artist_id" class="form-control">
				@foreach ($artists as $artist)
				<option value="{{ $artist->id }}"> {{ $artist->name }} </option>
				@endforeach
			</select>
		</div>	

		<div class="form-group">
			<label for="">Nama Album</label>
			<select name="album_id" class="form-control">
				@foreach ($albums as $album)
				<option value="{{ $album->id }}"> {{ $album->name }} </option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="">Track</label>
			<select name="track_id" class="form-control">
				@foreach ($tracks as $track)
				<option value="{{ $track->id }}"> {{ $track->name }} </option>
				@endforeach
			</select>
		</div>
	
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="SIMPAN">
		</div>
	</form>
</div>

@endsection