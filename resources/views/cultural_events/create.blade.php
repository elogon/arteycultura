@extends('layouts.app')
@section('title', 'Adicionar Eventos')

@section('content')
		<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1> <i class="fa fa-plus"></i> Adicionar Eventos</h1>
				<hr>
				<a href="{{ url('cultural_events') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Eventos
				</a>
				<br><br>
				
				<form action="{{ url('cultural_events') }}" method="post" enctype="multipart/form-data">
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
						<input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" placeholder="Descripción">
						@error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
				
					<div class="col-12">
						<button class="btn btn-block btn-custom btn-upload" type="button">
							<i class="fa fa-upload"></i>
							Seleccionar archivo
						</button>
						<input type="file" name="file" id="file" class="d-none" accept="image/*">
						<br>
						<div class="text-center @error('file') is-invalid @enderror">
							<img id="preview" class="img-thumbnail" src="{{ asset('imgs/no-photo.png')}}" width="120px">
						</div>
						@error('file')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
							@enderror
						</span>
					</div>

					<div class="form-group">
						<input type="time" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date') }}" placeholder=" Hora inicio">
						@error('start_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>


					<div class="form-group">
						<input type="time"class="form-control @error('end_date') is-invalid @enderror"  name="end_date" value="{{ old('end_date') }}" placeholder="Hora fin">
						@error('end_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					


	
					<div class="container">
						<button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Guardar </button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
@endsection