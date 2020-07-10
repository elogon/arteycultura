@extends('layouts.app')
@section('title', 'Consultar Usuarios')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1> <i class="fa fa-search"></i> Consultar Usuarios</h1>
				<hr>
				<a href="{{ url('users') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Usuarios
				</a>
				<br><br>
				<table class="table table-striped">
					<tr>
						<th>Nombre Completo:</th>
						<td>{{ $user->fullname }}</td>
					</tr>
					<tr>
						<th>Tipo Documento:</th>
						<td>{{ $user->document_type }}</td>
					</tr>
					<tr>
						<th>Número documento:</th>
						<td>{{ $user->num_document }}</td>
					</tr>
					<tr>
						<th>Email:</th>
						<td>{{ $user->email }}</td>
					</tr>
					<tr>
						<th>Rol:</th>
						<td>{{ $user->role }}</td>
					</tr>
					<tr>
						<th>Estado:</th>
						<td>
							@if ($user->status == "1")
	                            <span class="btn btn-success">Activo</span>
	                        @else
	                            <span class="btn btn-danger">Inactivo</span>    
	                        @endif
						</td>
					</tr>	
				</table>

			</div>
		</div>
	</div>
	@include('menu.menu');
@endsection