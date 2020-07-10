@extends('layouts.app')
@section('title', 'Adicionar Publicaciones')

@section('content')
		<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1> <i class="fa fa-plus"></i> Adicionar Publicaciones</h1>
				<hr>
				<a href="{{ url('publications') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Publicaciones
				</a>
				<br><br>
				
				<form action="{{ url('publications') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Titulo">
						@error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Descripción">{{ old('description') }}</textarea>
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
						<input type="file" name="file" id="file" class="d-none" accept="file/*">
						<br>
						<div class="text-center @error('file') is-invalid @enderror">
							<img id="preview" class="img-thumbnail" src="{{ asset('imgs/no-category.png') }}" width="120px">
						</div>
						@error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					

					<div class="form-group">
						<button type="submit" class="btn btn-custom" id="custom">
						<i class="fa fa-save"></i>
						 Guardar 
						</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
@endsection