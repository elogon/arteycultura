@extends('layouts.app')
@section('title', 'Modificar Publicaciones')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1> <i class="fa fa-pen"></i> Modificar Publicaiones</h1>
				<hr>
				<a href="{{ url('publications') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Publicaciones
				</a>
				<br><br>
				<form action="{{ url('publications/'.$publication->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<input type="hidden" name="id" value="{{ $publication->id }}">
					<div class="form-group">
						<input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $publication->title) }}" placeholder="Titulo">
						@error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

					<div class="form-group">
						<textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Descripción">{{ old('description', $publication->description) }}</textarea>
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
						<input type="file" name="file" id="photo" class="d-none" accept="file/*">
						<br>
						<div class="text-center @error('image') is-invalid @enderror">
							<img id="preview" class="img-thumbnail" src="{{ asset($publication->file) }}" width="120px">
						</div>
						@error('file')
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