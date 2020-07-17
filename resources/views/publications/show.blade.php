@extends('layouts.app')
@section('title', 'Consultar Publicación')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1> <i class="fa fa-search"></i> Consultar Publicación</h1>
				<hr>
				<a href="{{ url('publications') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Publicaciones
				</a>
				<br><br>
				<table class="table table-striped">
					<tr>
						<th>Titulo:</th>
						<td>{{ $publications->title }}</td>
					</tr>
					<tr>
						<th>Descripción:</th>
						<td>{{ $publications->description }}</td>
					</tr>
					<tr>
						<th>Archivo:</th>
						<td>{{ $publications->file }}</td>
					</tr>
					<tr>
						<th>Aprendices:</th>
						<td>{{ $publications->users->fullname }}></td>
					</tr>
						
				</table>

			</div>
		</div>
	</div>
@endsection