@extends('layouts.app')
@section('title', 'Modificar Programa de Formación')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1> <i class="fa fa-pen"></i> Modificar Programa de Formación</h1>
				<hr>
				<a href="{{ url('training_programs') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Programas de Formación
				</a>
				<br><br>
				<form action="{{ url('training_programs/'.$training_programs->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<input type="hidden" name="id" value="{{ $training_programs->id }}">

					<div class="form-group">
						<input type="text" class="form-control @error('name_program') is-invalid @enderror" name="name_program" value="{{ old('name_program', $training_programs->name_program) }}" placeholder="Nombre del Programa">
						@error('name_program')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

					<div class="form-group">
						<input type="text" class="form-control @error('cod_program') is-invalid @enderror" name="cod_program" value="{{ old('cod_program', $training_programs->cod_program) }}" placeholder="Hora inicio">
						@error('cod_program')
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
@endsection