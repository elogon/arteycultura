@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <!-- Ionic icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('imgs//favicon.png')}}">
    
<body>
    <section id="welcome">
        <dIv class="container">
            <div class="content-center" >
                <h1 class="mt-5">Bienvenidos Arte y Cultura</h1>

                
            </div>
        </dIv>
    </section>

    <section id="portfolio">
        <div class="container-fluid">
            <div class="content-center">
                <h2>Semilleros</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
            </div>
            <div class="row">
                <div class="col-5">
                    <h3>Musica</h3>
                    <div class="semillero-container">
                        <img src="{{ asset('imgs/semillero-01.jpg') }}" class="img-fluid" alt="semillero 01">
                    </div>
                </div>
                
                <div class="col-5">
                    <h3>Arte</h3>
                    <div class="semillero-container">
                        <img src="{{ asset('imgs/semillero-02.jpg') }}" class="img-fluid" alt="semillero 02">
                    </div>
                </div>
                <div class="col-5">
                    <h3>Danza</h3>
                    <div class="semillero-container">
                        <img src="{{ asset('imgs/semillero-03.jpg') }}" class="img-fluid" alt="semillero 03">
                    </div>
                </div>
                <div class="col-5">
                    <h3>Poesia</h3>
                    <div class="semillero-container">
                        <img src="{{ asset('imgs/semillero-04.jpg') }}" class="img-fluid" alt="Portfolio 04">
                    </div>
                </div>
            </div>

            <br>
            <hr>
            <div class="text-center mt-4">¿En cual semillero te gustaria participar?</b></a>
            </div>
        </div>
    </section>


    <section id="team">
        <div class="container">
            <div class="content-center">
                <h2>Eventos</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
            </div>
            <div class="section">
        <div class="card">
            <div class="side side1">
                <div class="content">
                   <h2> First Card</h2> 
                   <p> lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                    </p>
                </div>
            </div>
            <div class="side side2">
                <h2>01</h2>
            </div>
        </div>
         <div class="card">
            <div class="side side1">
                <div class="content">
                   <h2> Second Card</h2> 
                   <p> lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                    </p>
                </div>
            </div>
            <div class="side side2">
                <h2>02</h2>
            </div>
        </div>
         <div class="card">
            <div class="side side1">
                <div class="content">
                   <h2> Third Card</h2> 
                   <p> lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                    </p>
                </div>
            </div>
            <div class="side side2">
                <h2>03</h2>
            </div>
        </div>
    </div>
    </section>


<!------------------------------------------------------------------>
    
    

    <section class="divider">
        <div class="container">
            <div class="content-center">
                <h2>Economia Naranja</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
            </div>
            
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-container">
                            <img src="{{ asset('imgs/economia.png') }}" class="img-fluid" width="1000px" height="1000px">
                                 
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="carousel-container">
                            <img src="{{ asset('imgs/economia2.jpg') }}" class="img-fluid" width="1000px" height="1000px">
                                 
                        </div>
                    </div>
                   <div class="carousel-item ">
                        <div class="carousel-container">
                            <img src="{{ asset('imgs/economia3.jpg') }}" class="img-fluid" width="1000px" height="1000px">
                                 
                        </div>
                    </div>
                    
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <div class="control-button">
                        <img src="{{ asset('imgs/arrow-borderless-left.svg') }}" class="img-fluid">
                    </div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <div class="control-button">
                        <img src="{{ asset('imgs/arrow-borderless-right.svg') }}" class="img-fluid">
                    </div>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="divide">
        <div class="container">
            <link href='https://fonts.googleapis.com/css?family=Roboto:100,400,300,500,700' rel='stylesheet' type='text/css'>

<div align="center">
<div style="width:1000px;">


<div class="style_prevu_kit" style="background-color:#f8b334;"><img src="{{ asset('imgs/evento-02.jpg') }}" class="img-fluid">
    <p>lorem1 smqimsqi</p>
</div>
<div class="style_prevu_kit" style="background-color:#00a096;"><img src="{{ asset('imgs/evento02.jpg') }}" class="img-fluid">
    <p>lorem1 smqimsqi</p>
</div>
<div class="style_prevu_kit" style="background-color:#97bf0d;"><img src="{{ asset('imgs/evento-03.jpg') }}" class="img-fluid">
    <p>lorem1 smqimsqi</p>
</div>

<div class="style_prevu_kit" style="background-color:#93a6a8;"><img src="{{ asset('imgs/evento03.jpg') }}" class="img-fluid">
    <p>lorem1 smqimsqi</p>
</div>
<div class="style_prevu_kit" style="background-color:#f8b334;"><img src="{{ asset('imgs/evento-02.jpg') }}" class="img-fluid">
    <p>lorem1 smqimsqi</p>
</div>
<div class="style_prevu_kit" style="background-color:#00a096;"><img src="{{ asset('imgs/evento02.jpg') }}" class="img-fluid">
    <p>lorem1 smqimsqi</p>
</div>
<div class="style_prevu_kit" style="background-color:#97bf0d;"><img src="{{ asset('imgs/evento-03.jpg') }}" class="img-fluid">
    <p>lorem1 smqimsqi</p>
</div>

<div class="style_prevu_kit" style="background-color:#93a6a8;"><img src="{{ asset('imgs/evento03.jpg') }}" class="img-fluid">
    <p>lorem1 smqimsqi</p>
</div>


</div>
        </div>
    </section>
<section class="divi">
        <div class="container">
            
        </div>
</section>
</body>
    
@endsection