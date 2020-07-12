@extends('layouts.app')
@section('title', 'Modificar Evento')

@section('content')
@include('menu.menu')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
			<h1 class="fa fa-pen">Modificar  Evento</h1>
				<hr>
				<a href="{{ url('cultural_events') }}">
					<i class="fas fa-list"></i>
					Ir a lista de Eventos
				</a>
				<br><br>

				<form action="{{ url('cultural_events/'.$cultural_events->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<input type="hidden" name="id" value="{{ $cultural_events->id }}">
					
					<div class="form-group">
						<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $cultural_events->name) }}" placeholder="Nombre:">
						@error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

					<div class="form-group">
						<input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description', $cultural_events->description) }}" placeholder="Descripción:">
						@error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

					<div class="form-group">
						<button class="btn btn-block btn-custom btn-upload" type="button">
							<i class="fa fa-upload"></i>
							Seleccionar Archivo
						</button>
						<input type="file" name="file" id="file" class="d-none" accept="file/*">
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
						<input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date') }}" placeholder="Fecha Inicio:">
						@error('start_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<input type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ old('end_date') }}" placeholder="Fecha Fin:">
						@error('end_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
							<option value="">Seleccione Categoría...</option>
							@foreach ($cats as $cat)
								<option value="{{ $cat->id }}" @if (old('category_id') == $cat->id) selected @endif>{{ $cat->name }}</option>
							@endforeach
						</select>
						@error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-custom" value="Guardar"> <i class="fa fa-save"></i></input>
						<input type="reset" class="btn btn-custom" value="Limpiar Formulario">
					</div>
				</form>
			</div>
				</div>
			</div>
			
			@endsection
