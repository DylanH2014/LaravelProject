@extends('layout')


@section('content')

<div class="container">
<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
			<a class="navbar-brand">BowlAway</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="/bowling">Home</a></li>
				<li><a href="/bowling/all/dylan">Dylan</a></li>
				<li><a href="/bowling/all/justin">Justin</a></li> 
				<li><a href="/bowling/all/gary">Gary</a></li> 
			</ul>
		</div>
	</nav>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Bowling For: </h3>
		</div>
		<div class="panel-body">

			<table class="table">
				<thead>
					<tr>
						<th>Game Id</th>
						<th>Name</th>
						<th>Score</th>
						<th>Date</th>		
					</tr>	
				</thead>
				<tbody>
				@foreach($allGames as $games)
					<tr>
						<td>{{ $games->id }}</td>
						<td>{{ $games->user }}</td>
						<td>{{ $games->score }}</td>
						<td>{{ $games->created_at }}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>

</div>



@endsection


@section('scripts')
<script>
	
// $(document).ready(function() {
// 	var url = window.location;
// 	console.log(url);
// 	// Will only work if string in href matches with location
// 	$('ul.nav a[href="'+ url +'"]').parent().addClass('active');
// });
</script>
@endsection