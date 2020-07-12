@extends('layouts.app')
@section('title', 'Adicionar Usuarios')


@section('content')
@include('menu.menu')
		<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1> <i class="fa fa-plus"></i> Adicionar Usuarios</h1>
				<hr>
				<a href="{{ url('users') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Usuarios
				</a>
				<br><br>
				
				<form action="{{ url('users') }}" method="post" enctype="multipart/form-data">
					@csrf

					<div class="form-group">
						<input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre Completo">
						@error('fullname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="form-group">
						<select name="document_type" class="form-control @error('document_type') is-invalid @enderror">
							<option value="">Tipo de Documento</option>

                                         <option value="Tarjetaidentidad" @if (old('document_type') == 'Tarjetaidentidad') selected @endif>Tarjeta de identidad</option>

                                         <option value="Cedulaciudadania" @if (old('document_type') == 'Cedulaciudadania') selected @endif>Cedula de ciudadania</option>

                                         <option value="CedulaExtranjera" @if (old('document_type') == 'CedulaExtranjera') selected @endif>Cedula extranjera</option>
                                    </select>

						@error('document_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>


					<div class="form-group">
						<input type="text" class="form-control @error('num_document') is-invalid @enderror" name="num_document" value="{{ old('num_document') }}" placeholder="Número documento">
						@error('num_document')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>


					<div class="form-group">
						<input type="text"class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" placeholder="Correo Electrónico">
						@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña">
						@error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña">
					</div>
				
					
	
					<div class="form-group">
						<button type="submit" class="btn btn-custom"> <i class="fa fa-save"></i> Guardar </button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
@endsection