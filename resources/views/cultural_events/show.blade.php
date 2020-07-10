@extends('layouts.app')
@section('title', 'Consultar Eventos')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1> <i class="fa fa-search"></i> Consultar Eventos</h1>
				<hr>
				<a href="{{ url('cultural_events') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Eventos
				</a>
				<br><br>
				<table class="table table-striped">
					<tr>
						<th>Nombre:</th>
						<td>{{ $cultural_events->name }}</td>
					</tr>
					<tr>
						<th>Descripción:</th>
						<td>{{ $cultural_events->description }}</td>
					</tr>
					<tr>
						<th>Archivo:</th>
						<td>{{ $cultural_events->file }}</td>
					</tr>
					<tr>
						<th>Fecha Inicio:</th>
						<td>{{ $cultural_events->start_date }}</td>
					</tr>
					<tr>
						<th>Fecha Fin:</th>
						<td>{{ $cultural_events->end_date }}</td>
					</tr>
					<tr>
						<th>Usuario:</th>
						<td>{{ $art->user->fullname }}</td>
					</tr>
						
				</table>

			</div>
		</div>
	</div>
@endsection