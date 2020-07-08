@extends('layouts.app')
@section('title', 'Escritorio - Aprendiz')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mt-5">
            <div class="card">
                <img src="{{ asset('imgs/mydata.png') }}" height="280px" class="card-img-top">
                <div class="card-body">
                    <a href="{{ url('mydata') }}" class="btn btn-block btn-custom">
                        Mis Datos
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card">
                <img src="{{ asset('imgs/mypublications.png') }}" height="280px" class="card-img-top">
                <div class="card-body">
                    <a href="{{ url('mypublications') }}" class="btn btn-block btn-custom">
                        Mis Publicaciones
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card">
                <img src="{{ asset('imgs/myresearch_seedbeds.png') }}" height="280px" class="card-img-top">
                <div class="card-body">
                    <a href="{{ url('myresearch_seedbeds') }}" class="btn btn-block btn-custom">
                        Mis Semilleros
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection