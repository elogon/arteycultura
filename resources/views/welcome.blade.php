@extends('layouts.app')
@section('title', 'Página Inicial')

@section('content')
    
    <br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('imgs/im1.jpg') }}" alt="First slide" width="1000px"
  height="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('imgs/im2.jpg') }}" alt="Second slide" width="1000px"
  height="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('imgs/im3.jpg') }}" alt="Third slide" width="1000px"
  height="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('imgs/im4.jpg') }}" alt="Third slide" width="1000px"
  height="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('imgs/im5.jpg') }}" alt="Third slide" width="1000px"
  height="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('imgs/im6.jpg') }}" alt="Third slide" width="1000px"
  height="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('imgs/im7.jpg') }}" alt="Third slide" width="1000px"
  height="500px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection