@extends('layouts.app')
@section('title', 'Consultar Publicaciones')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1> <i class="fa fa-search"></i> Consultar Publicaciones</h1>
				<hr>
				<a href="{{ url('publications') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Publicaciones
				</a>
				<br><br>
				<table class="table table-striped">
					<tr>
						<td colspan="2" class="text-center">
							<img src="{{ asset($publications->file) }}" class="img-thumbnail" width="120px">
						</td>
					</tr>
					<tr>
						<th>Titulo:</th>
						<td>{{ $publications->title }}</td>
					</tr>
					<tr>
						<th>Descripción:</th>
						<td>{{ $publications->description }}</td>
					</tr>
				</table>

			</div>
		</div>
	</div>
@endsection