@extends('layouts.app')

@section('content')

<div class="container">
	<h3>Tambah Data Artist</h3>
	<form class="" action="{{ url('/artist') }}" method="post">
		@csrf
		<div class="form-group">
			<label for="">Nama Artist</label>
			<input type="text" class="form-control" name="name" placeholder="Nama artist">
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-success" value="SIMPAN">
		</div>

	</form>
</div>
@endsection