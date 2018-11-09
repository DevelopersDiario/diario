@extends('main')

@section('titulo')
  Diario Interactivo
@endsection 



@section('header-content')
<div class="container-fluid navbar-dark bg-dark fixed-top" >
  <nav class="navbar navbar-expand-lg  container ">
    <a class="navbar-brand mr-2" href="">
      <img src="images/instrumentos.png" width="60" height="60" class="d-incline-block aling-top " alt="logo">AMDI
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
       <!-- <li class="nav-item active ml-2">
          <a class="nav-link" href="#inicio">INICIO</a>
        </li>
        <li class="nav-item ml-2">
          <a class="nav-link" href="#nosotros">NOSOTROS</a>
        </li>
        <li class="nav-item ml-2">
          <a class="nav-link" href="#contacto" >CONTACTO</a>
        </li>
        <li class="nav-item ml-2 py-1">
          <a href="#" onclick="window.location='{{ url("register") }}'"  data-toggle="modal" data-target="#registros" class="btn btn-outline-primary btn-block ">REGISTRARME</a>
        </li>-->

        <li class="nav-item ml-2 py-1">
          <a  href="#" onclick="window.location='{{ url("login") }}'" class="btn btn-primary pull-right" data-toggle="modal" data-target="#login">
   INICIAR SESIÓN
</a>

         <!-- <a href="#" onclick="window.location='{{ url("login") }}'" data-toggle="modal" data-target="#login"  class="btn btn-outline-primary btn-block ">INICIAR SESIÓN</a>-->
        </li>
      </ul>
    </div>
  </nav>
</div>
@endsection

@section('main-content')

<!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-responsive" src="images/diario.png"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
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

</div>-->



<section id="main-tmpl">
        <div class="item " >
<section class="mainx-tmpl">
  <div class="item">
    <div id="inicio">
      <div class="container-fluid">        
          <div   class="row col-xl-12" >  
          <div class="col-sm-4">         
             <img class="img-responsive" src="images/didactico.png" style="position: relative; width: 70%; height: auto; left: 2%; border: 1px"  /> 
              </div> 
             <div class="col-md-8">
              <h1><p class="">Registra t&uacute;s momentos</p>
              </h1>
              <div class="col-md-12"> 
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="justify-content: center;">
    <div class="carousel-item active" style="justify-content: center">
      <img class="d-block w-20" src="images/diario_opt.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-20" src="images/image-add-button_opt.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-20"src="images/instrumentos_opt.png" alt="Third slide">
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

               </div>
             
           <!-- <h2><p class="momentos"></p></h2>
            <h3><p>Guarda tus archivos de las actividades</p></h3>
            <h3><p>escolares en tu diario personal. </p></h3>-->
           

             </div>
           </div>
            
            

           <!-- <img class="img-responsive" src="images/diario.png" class="img-responsive" width="500" height="580">-->
            
    
      </div>
    </div>
  </div>
</section>

       </div>
   </section>  

@endsection




@yield('main-content')
@yield('nosotros')
@yield('contacto')
@yield('footer')
