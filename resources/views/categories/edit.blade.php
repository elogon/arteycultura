@extends('layouts.app')
@section('title', 'Modificar Categorías')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1> <i class="fa fa-pen"></i> Modificar Categoría</h1>
				<hr>
				<a href="{{ url('categories') }}"> 
					<i class="fa fa-list"></i>
					Ir a Lista de Categorías
				</a>
				<br><br>
				<form action="{{ url('categories/'.$cat->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<input type="hidden" name="id" value="{{ $cat->id }}">
					<div class="form-group">
						<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $cat->name) }}" placeholder="Nombre">
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
							<img id="preview" class="img-thumbnail" src="{{ asset($cat->image) }}" width="120px">
						</div>
						@error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Descripción">{{ old('description', $cat->description) }}</textarea>
						@error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-custom" id="custom" > 
						<i class="fa fa-pen"></i>
						Modificar </button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection