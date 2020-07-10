@extends('layouts.app')
@section('title', 'Adicionar Programa de Formación')

@section('content')
		<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1> <i class="fa fa-plus"></i> Adicionar Programa de Formación</h1>
				<hr>
				<a href="{{ url('training_programs') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Programa de Formación
				</a>
				<br><br>
				
				<form action="{{ url('training_programs') }}" method="post" enctype="multipart/form-data">
					@csrf

					<div class="form-group">
						<input type="text" class="form-control @error('name_program') is-invalid @enderror" name="name_program" value="{{ old('name_program') }}" placeholder="Nombre Programa de Formación">
						@error('name_program')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
				
					<div class="form-group">
						<input type="text" class="form-control @error('cod_program') is-invalid @enderror" name="cod_program" value="{{ old('cod_program') }}" placeholder="Código Programa de Formación">
						@error('cod_program')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>


					
					<div class="container">
						<button type="submit" class="btn btn-warning"> <i class="fa fa-save"></i> Guardar </button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
@endsection