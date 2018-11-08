<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title >@yield('titulo')</title>
  <!-- Diario Interactivo -->
  <!-- Bootstrap CSS -->
  @section('head')
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
  <!-- main styles -->
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/estilos-index.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/registrarse.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/newStyle.css') }}"/>
  <script src="{{ asset('js/jquery.min.js')}}"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel="shortcut icon" href="{{ asset('images/herramientas.ico') }}"/>
  @show


</head>

<body>
@yield('header-content')



@section('footerjs')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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



@show
</body>
</html>
