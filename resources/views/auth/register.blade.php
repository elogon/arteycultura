@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-title text-center">
                    <h4>
                        <i class="fa fa-users"></i>
                        {{ __('custom.title-register') }}
                    </h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                        <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre Completo">
                        @error('fullname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <select name="document_type" class="form-control @error('document_type') is-invalid @enderror">
                            <option value="">Tipo de Documento...</option>
                            <option value="Tarjetaidentidad" @if (old('document_type') == 'Tarjetaidentidad') selected @endif>Tarjeta de Identidad</option>
                            <option value="Cedulaciudadania" @if (old('document_type') == 'Cedulaciudadania') selected @endif>Cedula de Cuidadania</option>
                            <option value="Cedulaextranjera" @if (old('document_type') == 'Cedulaextranjera') selected @endif>Cedula  Extranjera</option>
                        </select>
                        @error('document_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control @error('num_document') is-invalid @enderror" name="num_document" value="{{ old('num_document') }}" placeholder="Número de documento">
                        @error('num_document')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text"class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" placeholder="Correo Electrónico">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-custom">
                        <i class="fa fa-save"></i>
                         Registrarse
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
