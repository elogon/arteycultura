@extends('layouts.app')
@section('title', 'Lista de Semilleros')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1> <i class="fa fa-users"></i> Lista de Semilleros</h1>
				<hr>
				<a href="{{ url('research_seedbeds/create') }}" class="btn btn-custom"> 
					<i class="fa fa-plus"></i> 
					Adicionar Semilleros
				</a>
			
				
				<br>
				@csrf
			
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<<th>Nombre del semillero</th>
							<th>Descripción</th>
							<th>Dias</th>
							<th>Hora inicio</th>
							<th>Hora fin</th>
							<td>Acciones</td>
						</tr>
					</thead>
					<tbody id="content">
						@foreach ($research_seedbeds as $research_seedbeds)
							<tr>
								<<td>{{ $research_seedbeds->name_research_seedbed }}</td>
								<td>{{ $research_seedbeds->description}}</td>
								<td>{{ $research_seedbeds->days}}</td>
								<td>{{ $research_seedbeds->start_date}}</td>
								<td>{{ $research_seedbeds->end_date}}</td>
								<td>
									<a href="{{ url('research_seedbeds/'.$research_seedbeds->id) }}" class="btn btn-sm btn-custom">
										<i class="fa fa-search"></i>
									</a>
									<a href="{{ url('research_seedbeds/'.$research_seedbeds->id.'/edit/') }}" class="btn btn-sm btn-custom">
										<i class="fa fa-pen"></i>
									</a>
									<form action="{{ url('research_seedbeds/'.$research_seedbeds->id) }}" method="post" style="display: inline-block;">
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
					{{ $research_seedbeds->links() }}
			</div>
		</div>
	</div>
@endsection