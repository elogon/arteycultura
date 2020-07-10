@extends('layouts.app')
@section('title', 'Lista de Programa de Formación')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1> <i class="fa fa-calendar-alt"></i> Lista de Programa de Formación</h1>
				<hr>
				<a href="{{ url('training_programs/create') }}" class="btn btn-custom"> 
					<i class="fa fa-plus"></i> 
					Adicionar Programa de Formación
				</a>
			
				
				<br>
				@csrf
			
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Código programa</th>
							<td>Acciones</td>
						</tr>
					</thead>
					<tbody id="content">
						@foreach ($training_programs as $training_programs)
							<tr>
								<td>{{ $training_programs->name_program }}</td>
								<td>{{ $training_programs->cod_program}}</td>
								<td>
									<a href="{{ url('training_programs/'.$training_programs->id) }}" class="btn btn-sm btn-custom">
										<i class="fa fa-search"></i>
									</a>
									<a href="{{ url('training_programs/'.$training_programs->id.'/edit/') }}" class="btn btn-sm btn-custom">
										<i class="fa fa-pen"></i>
									</a>
									<form action="{{ url('training_programs/'.$training_programs->id) }}" method="post" style="display: inline-block;">
										@csrf
										@method('delete')
										<button type="button" class="btn btn-sm btn-custom-danger btn-delete">
											<i class=" fa fa-trash"></i>
										</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
					{{ $training_programs
						->links() }}
			</div>
		</div>
	</div>
@endsection