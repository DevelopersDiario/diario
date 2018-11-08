<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AMDI') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    @section('head')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <!-- main styles -->
    <link rel="stylesheet" href="{{ asset('css/main-style.css') }}"/>
    <script src="{{ asset('js/jquery.min.js')}}"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="shortcut icon" href="{{ asset('images/herramientas.ico') }}"/>
   
    @show
</head>
<body style="margin-top: 1%;">
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top " >
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="images/instrumentos.png" width="60" height="60" class="d-incline-block aling-top " alt="logo">
                    {{ config('app.name', 'AMDI') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" id="menu">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a></li>

                        @else
                            <li class="nav-item active ml-2">
                              <a class="nav-link" id="iniciouno" onclick="window.location='{{ url("login") }}'" href="#inicio" >INICIO</a>
                            </li>

                            <li class="nav-item ml-2">
                              <a class="nav-link"  id="iniciodos" onclick="window.location='{{ url("grupos") }}'" >GRUPOS</a>
                            </li>
                            <li class="nav-item ml-2">
                              <a class="nav-link"  id="iniciotres" href="{{route('configuracion')}}" >CONFIGURACIÓN</a>
                            </li>

                            &nbsp &nbsp
                            <form class="form-inline my-2 my-lg-0">
                              <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                            </form>
                            &nbsp &nbsp &nbsp &nbsp
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
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
    @section('footerjs')


    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
   

<script type="text/javascript">
  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/eventsInput.js')}}"></script>
     <script>
       /* $(document).ready(function() {
            //$("#iniciouno").addClass('selectedactive');

            $("#iniciouno").click(function(event) {
                
                $("#iniciouno").addClass('selectedactive');
                $("#iniciodos").removeClass('selectedactive')
                $("#iniciotres").removeClass('selectedactive')
            });

            $("#iniciodos").click(function(event) {
                
                $("#iniciodos").addClass('selectedactive');
                $("#iniciouno").removeClass('selectedactive')
                $("#iniciotres").removeClass('selectedactive')
            });


            $("#iniciotres").click(function(event) {
                
                $("#iniciotres").addClass('selectedactive');
                $("#iniciodos").removeClass('selectedactive')
                $("#iniciouno").removeClass('selectedactive')
            });
            
        });*/
    </script>

    @show
</body>
</html>
