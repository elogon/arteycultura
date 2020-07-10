@extends('layouts.app')
@section('title', 'Modificar Semillero')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h1> <i class="fa fa-pen"></i> Modificar Semillero</h1>
				<hr>
				<a href="{{ url('research_seedbeds') }}"> 
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Semillero
				</a>
				<br><br>
				<form action="{{ url('research_seedbeds/'.$research_seedbeds->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<input type="hidden" name="id" value="{{ $research_seedbeds->id }}">
					<div class="form-group">
						<input type="text" class="form-control @error('name_research_seedbed') is-invalid @enderror" name="name_research_seedbed" value="{{ old('name_research_seedbed', $research_seedbeds->name_research_seedbed) }}" placeholder="Nombre">
						@error('name_research_seedbed')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

					<div class="form-group">
					<input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description', $research_seedbeds->description) }}" placeholder="Descripción">
					@error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

					<div class="form-group">
					<input type="date" class="form-control @error('days') is-invalid @enderror" name="days" value="{{ old('days', $research_seedbeds->days) }}" placeholder="Días">
					@error('days')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

					

					<div class="form-group">
						<input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date', $research_seedbeds->start_date) }}" placeholder="Fecha Inicio">
						@error('start_date')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                    @enderror
					</div>

					<div class="form-group">
						<input type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ old('end_date', $research_seedbeds->end_date) }}" placeholder="Fecha Fin">
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