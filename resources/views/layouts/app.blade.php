<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-custom shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Arte y Cultura
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('home') }}"> 
                                <i class="fa fa-home"></i>
                                {{ __('custom.home') }}
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    <i class="fa fa-lock"></i>
                                    {{ __('custom.login') }}
                                </a>
                            </li>
                            <li class="nav-item"><span class="nav-link">|</span></li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                    <i class="fa fa-user"></i>
                                    {{ __('custom.register') }}
                                </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fullname }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->role == 'Admin')
                                        <a class="dropdown-item" href="{{ url('users') }}">
                                            <i class="fa fa-users"></i>
                                             Módulo Usuarios 
                                        </a>
                                        <a class="dropdown-item" href="{{ url('categories') }}">
                                            <i class="fa fa-layer-group"></i>
                                             Módulo Categorías 
                                        </a>
                                        <a class="dropdown-item" href="{{ url('cultural_events') }}">
                                            <i class="fa fa-calendar-check"></i>
                                             Módulo Eventos
                                        </a>
                                        <a class="dropdown-item" href="{{ url('quarters') }}">
                                            <i class="fa fa-calendar"></i>
                                             Módulo Trimestre
                                        </a>
                                        <a class="dropdown-item" href="{{ url('trainig_programs') }}">
                                            <i class="fa fa-list"></i>
                                             Módulo Programas de Formación
                                        </a>
                                        <a class="dropdown-item" href="{{ url('publications') }}">
                                            <i class="fa fa-th-list"></i>
                                             Módulo Publicaciones
                                        </a>
                                         <a class="dropdown-item" href="{{ url('research_seedbeds') }}">
                                            <i class="fa fa-th-list"></i>
                                             Módulo Semilleros
                                        </a>
                                    @elseif(Auth::user()->role == 'Apprentice')
                                        <a class="dropdown-item" href="{{ url('mydata') }}">
                                            <i class="fa fa-address-card"></i>
                                             Mis Datos 
                                        </a>
                                        <a class="dropdown-item" href="{{ url('mypublications') }}">
                                            <i class="fa fa-list-alt"></i>
                                             Mis Publicaciones
                                        </a>
                                        <a class="dropdown-item" href="{{ url('myresearch_seedbeds') }}">
                                            <i class="fa fa-seedbed"></i>
                                             Mis Semilleros
                                        </a>
                                    @endif
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-times"></i>
                                        {{ __('custom.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('js/sweetalert2@9.js') }}"></script>
    <script>
        $(document).ready(function() {
            /* - - - - - - - - - - - - - - - - - - - - - - - - - */
            $('.btn-delete').click(function(event) {
                Swal.fire({
                  title: 'Esta usted seguro?',
                  text: "Desea eliminar este registro!",
                  icon: 'error',
                  showCancelButton: true,
                  confirmButtonColor: '#FF8C00',
                  cancelButtonColor: '#c20031',
                  confirmButtonText: 'Aceptar',
                  cancelButtonText: 'Cancelar'
                }).then((result) => {
                  if (result.value) {
                    $(this).parent().submit();
                  }
                });
            });
             /* - - - - - - - - - - - - - - - - - - - - - - - - - */
            $('.btn-upload').click(function(event) {
                $('#photo').click();
            });
            $('#photo').change(function(event) {
                var fileName = event.target.files[0].name;
                var reader = new FileReader();
                reader.onload = function(event) {
                    $('#preview').attr('src', event.target.result);
                };
                reader.readAsDataURL(this.files[0]);
            });
            /* - - - - - - - - - - - - - - - - - - - - - - - - - */
            $('body').on('keyup', '#qsearch', function(event) {
                event.preventDefault();
                $q = $(this).val();
                $t = $('input[name=_token]').val();
                $m = $('#tmodel').val();
                $('.loader').removeClass('d-none');
                $('.table').hide();
                $sto = setTimeout(function() {
                    clearTimeout($sto);
                    $.post($m+'/search', { 
                        q:      $q,
                        _token: $t }, function(data) {
                        $('.loader').addClass('d-none');
                        $('#content').html(data);
                        $('.table').fadeIn('slow');
                    });
                },1600);
            });
            /* - - - - - - - - - - - - - - - - - - - - - - - - - */
            // Import Users
            $('.btn-excel').click(function(event) {
                $('#file').click();
            });
             $('#file').change(function(event) {
                 $(this).parent().submit();
             });
             /* - - - - - - - - - - - - - - - - - - - - - - - - - */
            $('body').on('change', '#idcat', function(event) {
                event.preventDefault();
                $idcat = $(this).val();
                $tk    = $('input[name=_token]').val();
                $('.loader').removeClass('d-none');
                $('#content').hide();
                $sto = setTimeout(function() {
                    clearTimeout($sto);
                    $.post('artsbycat', { 
                        idcat:  $idcat,
                        _token: $tk }, function(data) {
                        $('.loader').addClass('d-none');
                        $('#content').html(data).fadeIn('slow');
                    });
                },1600);
            });
            /* - - - - - - - - - - - - - - - - - - - - - - - - - */
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 3
                  }
                }
              });
            /* - - - - - - - - - - - - - - - - - - - - - - - - - */
        });
    </script>
</body>
</html>