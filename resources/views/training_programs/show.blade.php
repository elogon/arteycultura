@extends('layouts.app')
@section('title', 'Consultar Programa de Formación')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1> <i class="fa fa-search"></i> Consultar Programa de Formación</h1>
				<hr>
				<a href="{{ url('training_programs') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Programa de Formación
				</a>
				<br><br>
				<table class="table table-striped">
					
					<tr>
						<th>Nombre Programa de Formación:</th>
						<td>{{ $training_programs->name_program }}</td>
					</tr>
					<tr>
						<th>Código Programa de Formación:</th>
						<td>{{ $training_programs->cod_program }}</td>
					</tr>
			</div>
		</div>
	</div>
@endsection