@extends('layouts.app')
@section('title', 'Consultar Semillero')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1> <i class="fa fa-search"></i> Consultar Semillero</h1>
				<hr>
				<a href="{{ url('research_seedbeds') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Semilleros
				</a>
				<br><br>
				<table class="table table-striped">
					
					<tr>
						<th>Nombre del Semillero:</th>
						<td>{{ $research_seedbeds->name_research_seedbed }}</td>
					</tr>
					<tr>
						<th>Descripción:</th>
						<td>{{ $research_seedbeds->description }}</td>
					</tr>
					<tr>
						<th>Dias del semillero:</th>
						<td>{{ $research_seedbeds->days }}</td>
					</tr>
					<tr>
						<th>Fecha Inicio:</th>
						<td>{{ $research_seedbeds->start_date }}</td>
					</tr>
					<tr>
						<th>Fecha Fin:</th>
						<td>{{ $research_seedbeds->end_date }}</td>
					</tr>
					
				</table>

			</div>
		</div>
	</div>
@endsection