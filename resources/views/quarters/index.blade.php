@extends('layouts.app')
@section('title', 'Lista de Trimestre')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1> <i class="fa fa-calendar-alt"></i> Lista de Trimestre</h1>
				<hr>
				<a href="{{ url('quarters/create') }}" class="btn btn-custom"> 
					<i class="fa fa-plus"></i> 
					Adicionar Trimestre
				</a>
			
				
				<br>
				@csrf
			
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Trimestre</th>
							<th>Hora inicio</th>
							<th>Hora fin</th>
							<td>Acciones</td>
						</tr>
					</thead>
					<tbody id="content">
						@foreach ($quarters as $quarters)
							<tr>
								<td>{{ $quarters->num_quarter }}</td>
								<td>{{ $quarters->start_date}}</td>
								<td>{{ $quarters->end_date}}</td>
								<td>
									<a href="{{ url('quarters/'.$quarters->id) }}" class="btn btn-sm btn-custom">
										<i class="fa fa-search"></i>
									</a>
									<a href="{{ url('quarters/'.$quarters->id.'/edit/') }}" class="btn btn-sm btn-custom">
										<i class="fa fa-pen"></i>
									</a>
									<form action="{{ url('quarters/'.$quarters->id) }}" method="post" style="display: inline-block;">
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
					{{ $quarters
						->links() }}
			</div>
		</div>
	</div>
@endsection