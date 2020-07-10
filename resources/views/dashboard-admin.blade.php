@extends('layouts.app')
@section('title', 'Escritorio - Administrador')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{--  --}}
        <div class="col-md-4 mt-5">
            <div class="card">
                <img src="{{ asset('imgs/mod-usuarios.png') }}" height="280px" class="card-img-top">
                <div class="card-body">
                    <a href="{{ url('users') }}" class="btn btn-block btn-custom">
                        Módulo Usuarios
                    </a>
                </div>
            </div>
        </div>
        {{--  --}}
        <div class="col-md-4 mt-5">
            <div class="card">
                <img src="{{ asset('imgs/mod-categories.png') }}" height="280px" class="card-img-top">
                <div class="card-body">
                    <a href="{{ url('categories') }}" class="btn btn-block btn-custom">
                        Módulo Categorias
                    </a>
                </div>
            </div>
        </div>
        {{--  --}}
         <div class="col-md-4 mt-5">
            <div class="card">
                <img src="{{ asset('imgs/mod-evento.png') }}" height="280px" class="card-img-top">
                <div class="card-body">
                    <a href="{{ url('cultural_events') }}" class="btn btn-block btn-custom">
                        Módulo Eventos
                    </a>
                </div>
            </div>
        </div>
        {{--  --}}
         <div class="col-md-4 mt-5">
            <div class="card">
                <img src="{{ asset('imgs/mod-trimestre.png') }}" height="280px" class="card-img-top">
                <div class="card-body">
                    <a href="{{ url('quarters') }}" class="btn btn-block btn-custom">
                        Módulo Trimestres
                </div>
            </div>
        </div>
        {{--  --}}
         <div class="col-md-4 mt-5">
            <div class="card">
                <img src="{{ asset('imgs/mod-programa.png') }}" height="280px" class="card-img-top">
                <div class="card-body">
                    <a href="{{ url('trainig_programs') }}" class="btn btn-block btn-custom">
                        Módulo Programas de Formación
                    </a>
                </div>
            </div>
        </div>
        
        {{--  --}}
         <div class="col-md-4 mt-5">
            <div class="card">
                <img src="{{ asset('imgs/mod-publicaciones.png') }}" height="280px" class="card-img-top">
                <div class="card-body">
                    <a href="{{ url('publications') }}" class="btn btn-block btn-custom">
                        Módulo Publicaciones
                    </a>
                </div>
            </div>
        </div>
        {{--  --}}
         <div class="col-md-4 mt-5">
            <div class="card">
                <img src="{{ asset('imgs/mod-semillero.png') }}" height="280px" class="card-img-top">
                <div class="card-body">
                    <a href="{{ url('research_seedbeds') }}" class="btn btn-block btn-custom">
                        Módulo Semilleros
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('menu.menu');
@endsection