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
			<h3 class="panel-title">Information</h3>
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
					<tr>
						<td>{{ $game->id }}</td>
						<td>{{ $game->user }}</td>
						<td>{{ $game->score }}</td>
						<td>{{ $game->created_at }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

</div>



@endsection

