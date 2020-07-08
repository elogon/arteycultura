@extends('layouts.app')
@section('title', 'Adicionar Categorías')

@section('content')
		<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1> <i class="fa fa-plus"></i> Adicionar Categorías</h1>
				<hr>
				<a href="{{ url('categories') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Categorías
				</a>
				<br><br>
				
				<form action="{{ url('categories') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre">
						@error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<button class="btn btn-block btn-custom btn-upload" id="custom" type="button">
							<i class="fa fa-upload"></i>
							Seleccionar Imagen
						</button>
						<input type="file" name="image" id="photo" class="d-none" accept="image/*">
						<br>
						<div class="text-center @error('image') is-invalid @enderror">
							<img id="preview" class="img-thumbnail" src="{{ asset('imgs/no-photo.png') }}" width="120px">
						</div>
						@error('image')
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