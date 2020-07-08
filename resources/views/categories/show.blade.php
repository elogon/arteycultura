@extends('layouts.app')
@section('title', 'Consultar Categorías')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1> <i class="fa fa-search"></i> Consultar Categoría</h1>
				<hr>
				<a href="{{ url('categories') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Categorías
				</a>
				<br><br>
				<table class="table table-striped">
					<tr>
						<td colspan="2" class="text-center">
							<img src="{{ asset($cat->image) }}" class="img-thumbnail" width="120px">
						</td>
					</tr>
					<tr>
						<th>Nombre:</th>
						<td>{{ $cat->name }}</td>
					</tr>
					<tr>
						<th>Descripción:</th>
						<td>{{ $cat->description }}</td>
					</tr>
				</table>

			</div>
		</div>
	</div>
@endsection