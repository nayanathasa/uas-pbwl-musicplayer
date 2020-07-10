@extends('layouts.app')

@section('content')

<div class="container">
	<h3>Tambah Data Album</h3>
	<form class="" action="{{ url('/album') }}" method="POST">
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
			<input type="text" class="form-control" name="name" placeholder="Nama Album">
		</div>
	
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="SIMPAN">
		</div>
	</form>
</div>

@endsection