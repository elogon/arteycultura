@extends('layouts.app')
@section('title', 'Página Inicial')

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
@section('content')

<div class="row justify-content-center">

<div id="myCarousel" class="carousel slide" data-ride="carousel" class="col-sm-8">

  <!-- Indicators --> 
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('imgs/fondo1.png') }}" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imgs/arte3.png') }}" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imgs/creatividad.png') }}" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</div>
<!---------------------------------------------------->

@endsection