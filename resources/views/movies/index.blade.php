@extends('layout')


@section('content') 	
	<h1>Movies</h1>
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<div>
		<form method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div>
			<label>Movie Name</label>
			<input type="text" name="movieName">
		</div>
		<div>
			<label>Amount</label>
			<input type="text" name="movieAmount">
		</div>
		<div>
			<button type="submit">Submit</button>
		</div>
		<div>
			<label>test</label>
		</div>
		</form>
	</div>

@endsection