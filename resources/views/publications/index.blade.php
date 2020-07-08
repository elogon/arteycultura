@extends('layouts.app')
@section('title', 'Lista de Publicaciones')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1> <i class="fa fa-th-list"></i> Lista de Publicaciones</h1>
				<hr>
				<a href="{{ url('publications/create') }}" class="btn btn-custom" id="custom">
					<i class="fa fa-plus"></i> 
					Adicionar Publicación
				</a>
				
					@csrf
				
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Descripcion</th>
							<th>Archivo</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody id="content">
						@foreach ($publications as $publication)
							<tr>
								<td>{{ $publication->title }}</td>
								<td>{{ $publication->description }}</td>
								<td>
									<img src="{{ asset($publication->file) }}" width="120px">
								</td>
								<td>
									<a href="{{ url('publications/'.$publication->id) }}" class="btn btn-sm btn-custom" id="custom">
										<i class="fa fa-search"></i>
									</a>
									<a href="{{ url('publications/'.$publication->id.'/edit/') }}" class="btn btn-sm btn-custom" id="custom">
										<i class="fa fa-pen"></i>
									</a>
									<form action="{{ url('publications/'.$publication->id) }}" method="post" style="display: inline-block;">
										@csrf
										@method('delete')
										<button type="button" class="btn btn-sm btn-custom-danger btn-delete" id="custom">
											<i class=" fa fa-trash"></i>
										</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
					{{ $publications->links() }}
			</div>
		</div>
	</div>
@endsection