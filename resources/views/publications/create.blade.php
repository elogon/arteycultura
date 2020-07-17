@extends('layouts.app')
@section('title', 'Adicionar Publicación')

@section('content')

		<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1> <i class="fa fa-plus"></i> Adicionar Publicación</h1>
				<hr>
				<a href="{{ url('publications') }}"> 
					<i class="fa fa-list"></i>
					Ir a Lista de Publicaciones
				</a>
				<br><br>
				
				<form action="{{ url('publications') }}" method="post" enctype="multipart/form-data">
					@csrf

					<div class="form-group">
						<input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Titulo:">
						@error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" placeholder="Descripción:">
						@error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<button class="btn btn-block btn-custom btn-upload" id="custom" type="button">
							<i class="fa fa-upload"></i>
							Seleccionar Archivo
						</button>
						<input type="file" name="file" id="photo" class="d-none">
						<br>
						<div class="text-center @error('file') is-invalid @enderror">
							<img id="preview" class="img-thumbnail" src="{{ asset('imgs/no-file.png') }}" width="120px">
						</div>
						@error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
							<option value="">Seleccione el aprendiz...</option>
							@foreach ($users as $users)
								<option value="{{ $users->id }}" @if (old('user_id') == $users->id) selected @endif>{{ $users->fullname }}</option>
							@endforeach
						</select>
						@error('user_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>


	
					<div class="form-group">
						<input type="submit" class="btn btn-custom" value="Guardar"></input>
						<input type="reset" class="btn btn-custom" value="Limpiar Formulario">
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
@endsection