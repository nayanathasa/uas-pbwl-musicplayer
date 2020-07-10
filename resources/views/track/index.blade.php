@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3>Daftar Track</h3>
	<a class="btn btn-success" href="{{ url('track/create') }}">Tambah Data</a>

	<table class="table table-bordered table-striped table-hover mt-2">
		<tr>
			<td>NO</td>
			<td>JUDUL TRACK</td>
			<td>NAMA ARTIST</td>
			<td>NAMA ALBUM</td>
			<td>TIME</td>
			<td>TRACK</td>
			<td>EDIT</td>
			<td>HAPUS</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->name }}</td>
			<td>{{ $row->artist->name }}</td>
			<td>{{ $row->album->name }}</td>
			<td>{{ $row->time }}</td>
			<td>
				<audio controls>
					<source src="lagu\{{ $row->file }}" type="audio/mpeg">
				</audio>
			</td>
			<td><a class="btn btn-primary" href="{{ url('track/' . $row->id . '/edit') }}">Edit</a></td>
			<td>
				<form action="{{ url('track/' . $row->id) }}" method="POST">
					<input name="_method" type="hidden" value="DELETE">
					@csrf
					<button class="btn btn-danger">Hapus</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>

</div>

@endsection