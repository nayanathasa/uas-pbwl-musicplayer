@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3>Daftar Played</h3>
	<a class="btn btn-success" href="{{ url('played/create') }}">Tambah Data</a>

	<table class="table table-bordered table-striped table-hover mt-2">
		<tr>
			<td>NO</td>
			<td>NAMA ARTIST</td>
			<td>NAMA ALBUM</td>
			<td>TRACK</td>
			<td>DATE</td>
			<td>HAPUS</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->artist->name }}</td>
			<td>{{ $row->album->name }}</td>
			<td>{{ $row->track->name }}</td>
			<td>{{ $row->created_at }}</td>
			<td>
				<form action="{{ url('played/' . $row->id) }}" method="POST">
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