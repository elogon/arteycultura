@extends('layouts.app')
@section('title', 'Lista de Eventos')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1> <i class="fa fa-layer-group"></i> Lista de Eventos</h1>
				<hr>
				<a href="{{ url('cultural_events/create') }}" class="btn btn-custom"> 
					<i class="fa fa-plus"></i> 
					Adicionar Eventos
				</a>
				<br>
			
				
				@csrf
			
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Description</th>
							<th>Archivo</th>
							<th>Fecha Inicio</th>
							<th>Fecha Fin</th>
							<td>Acciones</td>
						</tr>
					</thead>
					<tbody id="content">
						@foreach ($cultural_events as $cultural_events)
							<tr>
								<td>{{ $cultural_events->name }}</td>
								<td>{{ $cultural_events->description }}</td>
								<td>{{ $cultural_events->file }}</td>
								<td>{{ $cultural_events->start_date}}</td>
								<td>{{ $cultural_events->end_date}}</td>
								<td>
									<a href="{{ url('cultural_events/'.$cultural_events->id) }}" class="btn btn-sm btn-custom">
										<i class="fa fa-search"></i>
									</a>
									<a href="{{ url('cultural_events/'.$cultural_events->id.'/edit/') }}" class="btn btn-sm btn-custom">
										<i class="fa fa-pen"></i>
									</a>
									<form action="{{ url('cultural_events/'.$cultural_events->id) }}" method="post" style="display: inline-block;">
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
				
				{{ $cultural_events->links() }}
			</div>
		</div>
	</div>
	 @include('menu.menu');
@endsection