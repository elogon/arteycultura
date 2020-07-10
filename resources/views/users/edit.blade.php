@extends('layouts.app')
@section('title', 'Modificar Usuarios')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1> <i class="fa fa-pen"></i> Modificar Usuarios</h1>
				<hr>
				<a href="{{ url('users') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Usuarios
				</a>
				<br><br>
				<form action="{{ url('users/'.$user->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<input type="hidden" name="id" value="{{ $user->id }}">
					<div class="form-group">
						<input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname', $user->fullname) }}" placeholder="Nombre Completo">
						@error('fullname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

					<div class="form-group">
					<input type="text" class="form-control @error('document_type') is-invalid @enderror" name="document_type" value="{{ old('document_type', $user->document_type) }}" placeholder="Tipo Documento">
					@error('document_type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

					<div class="form-group">
					<input type="text" class="form-control @error('num_document') is-invalid @enderror" name="num_document" value="{{ old('num_document', $user->num_document) }}" placeholder="Número Documento">
					@error('num_document')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

					

					<div class="form-group">
					<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" placeholder="Correo Electrónico">
					@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>
	
					
					<div class="form-group">
						<button type="submit" class="btn btn-custom"> 
						<i class="fa fa-pen"></i>
						Modificar </button>
					</div>
				</form>
			</div>
		</div>
	</div>
	@include('menu.menu');
@endsection