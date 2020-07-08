@extends('layouts.app')
@section('title', 'Modificar Trimestre')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1> <i class="fa fa-pen"></i> Modificar Trimestre</h1>
				<hr>
				<a href="{{ url('quarters') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Trimestre
				</a>
				<br><br>
				<form action="{{ url('quarters/'.$quarters->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<input type="hidden" name="id" value="{{ $quarters->id }}">

					<div class="form-group">
						<input type="text" class="form-control @error('num_quarter') is-invalid @enderror" name="num_quarter" value="{{ old('num_quarter', $quarters->num_quarter) }}" placeholder="Trimestre">
						@error('num_quarter')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

					<div class="form-group">
						<input type="time" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date', $quarters->start_date) }}" placeholder="Hora inicio">
						@error('start_date')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                    @enderror
					</div>

					<div class="form-group">
						<input type="time" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ old('end_date', $quarters->end_date) }}" placeholder="Hora fin">
						@error('end_date')
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