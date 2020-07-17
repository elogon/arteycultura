@extends('layouts.app')
@section('title', 'Lista de Publicación')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1> <i class="fa fa-layer-group"></i> Lista de Publicación</h1>
				<hr>
				<a href="{{ url('publications/create') }}" class="btn btn-custom"> 
					<i class="fa fa-plus"></i> 
					Adicionar Publicaciones
				</a>
				<br>
			
				
				@csrf
			
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Titulo</th>
							<th>Descripción</th>
							<th>Archivo</th>
							<th>Aprendices</th>
							<td>Acciones</td>
						</tr>
					</thead>
					<tbody id="content">
						@foreach ($publications as $publications)
							<tr>
								<td>{{ $publications->title }}</td>
								<td>{{ $publications->description }}</td>
								<td>{{ $publications->file }}</td>
								<td>{{ $publications->users->fullname}}></td>
								<td>
									<a href="{{ url('publications/'.$publications->id) }}" class="btn btn-sm btn-custom">
										<i class="fa fa-search"></i>
									</a>
									<a href="{{ url('publications/'.$publications->id.'/edit/') }}" class="btn btn-sm btn-custom">
										<i class="fa fa-pen"></i>
									</a>
									<form action="{{ url('publications/'.$publications->id) }}" method="post" style="display: inline-block;">
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
			</div>
		</div>
	</div>
	 
@endsection