@extends('layouts.app')
@section('title', 'Editar Evento')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
			<h1 class="fa fa-pen">Actualizar  Evento</h1>
				<hr>
				<a href="{{ url('cultural_events') }}" class="btn btn-warning">
					<i class="fas fa-angle-left"></i>
					Ir a Evento
				</a>
				<hr>
				<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Actializar</div>
					<div class="card-body"></div>
		<form action="{{url('cultural_events/'.$cultural_events->id)}}" method="post" enctype="multipart/form-data">
			@csrf 
			@method('PUT')
			<input type="hidden" name="id" value="{{ $cultural_events->id }}">
			<div class="container">Nombre:
				</div>
				<div class="col-12">
			<input type="hidden" name="_method" value="PUT">
			<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $cultural_events->name }}">
			@error('name')
			<span class="invalid-feedback" role="alert">
				<strong>{{$message}}</strong>
			</span>
			@enderror
			<br><br>
		</div>
		<div class="container">Descripción:
				</div>
				<div class="col-12">
			<input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ $cultural_events->description }}" >
			@error('description')
			<span class="invalid-feedback" role="alert">
				<strong>{{$message}}</strong>
			</span>
			@enderror
			<br><br>
		</div>

		<div class="col-12">
			<button class="btn btn-block btn-custom btn-upload" type="button">
				<i class="fa fa-upload"></i>
				Seleccionar archivo
			</button>
			<input type="file" name="file" id="file" class="d-none" accept="image/*">
			<br>
			<div class="text-center @error('file') is-invalid @enderror">
				<img id="preview" class="img-thumbnail" src="{{ asset($cultural_events->file)}}" width="120px">
			</div>
			@error('file')
			<span class="invalid-feedback" role="alert">
				<strong>{{$message}}</strong>
				@enderror
			</span>
		</div>

		<div class="container">Hora inicio:
				</div>
				<div class="col-12">
			<input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror" value="{{ $cultural_events->start_date }}">
			@error('start_date')
			<span class="invalid-feedback" role="alert">
				<strong>{{$message}}</strong>
			</span>
			@enderror
			<br><br>
		</div>

		<div class="container">Hora inicio:
				</div>
				<div class="col-12">
			<input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror" value="{{ $cultural_events->end_date }}">
			@error('end_date')
			<span class="invalid-feedback" role="alert">
				<strong>{{$message}}</strong>
			</span>
			@enderror
			<br><br>
		</div>

		<div class="container">Hora inicio:
				</div>
				<div class="col-12">
			<input type="text" name="stand_out" class="form-control @error('stand_out') is-invalid @enderror" value="{{ $cultural_events->stand_out }}">
			@error('stand_out')
			<span class="invalid-feedback" role="alert">
				<strong>{{$message}}</strong>
			</span>
			@enderror
			<br><br>
		</div>
		
		
		
			<br>
		</form>
	</div>
		</div>
	</div>
	@endsection
