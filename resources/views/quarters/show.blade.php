@extends('layouts.app')
@section('title', 'Consultar Trimestre')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1> <i class="fa fa-search"></i> Consultar Trimestre</h1>
				<hr>
				<a href="{{ url('users') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Trimestre
				</a>
				<br><br>
				<table class="table table-striped">
					<tr>
						<td colspan="2" class="text-center">
							<img src="{{ asset($quarters->photo) }}" class="img-thumbnail" width="120px">
						</td>
					</tr>
					<tr>
						<th>Trimestre:</th>
						<td>{{ $quarters->num_quarter }}</td>
					</tr>
					<tr>
						<th>Hora inicio:</th>
						<td>{{ $quarters->start_date }}</td>
					</tr>
					<tr>
						<th>Hora fin:</th>
						<td>{{ $quarters->end_date }}</td>
					</tr>

			</div>
		</div>
	</div>
@endsection