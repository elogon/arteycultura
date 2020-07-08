@extends('layouts.app')
@section('title', 'Lista de Categorías')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1> <i class="fa fa-layer-group"></i> Lista de Categorías</h1>
				<hr>
				<a href="{{ url('categories/create') }}" class="btn btn-custom" id="custom">
					<i class="fa fa-plus"></i> 
					Adicionar Categoría
				</a>
				
					@csrf
				
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Imagen</th>
							<th>Descripcion</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody id="content">
						@foreach ($cats as $cat)
							<tr>
								<td>{{ $cat->name }}</td>
								<td>
									<img src="{{ asset($cat->image) }}" width="120px">
								</td>
								<td>{{ $cat->description }}</td>
								<td>
									<a href="{{ url('categories/'.$cat->id) }}" class="btn btn-sm btn-custom" id="custom">
										<i class="fa fa-search"></i>
									</a>
									<a href="{{ url('categories/'.$cat->id.'/edit/') }}" class="btn btn-sm btn-custom" id="custom">
										<i class="fa fa-pen"></i>
									</a>
									<form action="{{ url('categories/'.$cat->id) }}" method="post" style="display: inline-block;">
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
					{{ $cats->links() }}
			</div>
		</div>
	</div>
@endsection