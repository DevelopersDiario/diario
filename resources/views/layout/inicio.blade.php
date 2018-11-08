@extends('main')

@section('titulo')
  Diario Interactivo
@endsection



@section('header-content')
<div class="container-fluid navbar-dark bg-dark fixed-top">
  <nav class="navbar navbar-expand-lg  container ">
    <a class="navbar-brand mr-2" href="">
      <img src="images/instrumentos.png" width="60" height="60" class="d-incline-block aling-top " alt="logo">AMDI
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active ml-2">
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
        </li>

        <li class="nav-item ml-2 py-1">

          <a href="#" onclick="window.location='{{ url("login") }}'" data-toggle="modal" data-target="#login"  class="btn btn-outline-primary btn-block ">INICIAR SESIÓN</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
@endsection

@section('main-content')
<section id="main-tmpl">
        <div class="item " >
<section class="mainx-tmpl">
  <div class="item">
    <div id="inicio">
      <div class="container-fluid">
        <div class="row" >
          <div   class="col-lg-10" class="col-md-8" class="col-sm-10"  class="col-xl-12">
            <img class="imagen" src="images/diario.png" class="img-responsive" width="500" height="580">
            <h1><p class="inicio">CAPTURA TUS</p></h1>
            <h2><p class="momentos">MOMENTOS</p></h2>
            <h3><p>Guarda tus archivos de las actividades</p></h3>
            <h3><p>escolares en tu diario personal. </p></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

       </div>
   </section>

@endsection

@section('nosotros')
<section id="main-tmpl">
        <div class="item " id="nosotros">

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" >
          <h2  class="text-center" id="obj"><strong>Objetivo</strong> <i class="fa fa-map-marker pull-right hidden-xs-down" aria-hidden="true"></i></h2>
          <p class="text-justify ml-5 mr-5">
              Objetivo Comprender los procesos inherentes al pensamiento reflexivo que se generan a través del diario interactivo en línea, realizado por un  grupo estudiantes en sus escenarios reales de práctica. <br clear="none">DidacTIC imgObject Diseño didáctico Interactivo (DidacTIC) es una asociación civil que nació con el propósito de crear diseños tecnopedagógico que faciliten a alumnos y docentes la enseñanza y el aprendizaje reflexivo. <br clear="none"> Realiza diagnósticos sobre el uso de las tecnologías de la información en el ámbito educativo en sus diferentes niveles de acuerdo a su entorno y contexto. DidacTIC está consciente de la presencia de la tecnología en las actividades diarias y sobre todo, las tecnologías móviles, por esto busca captar la atención y consigo el interés del alumno y docentes en formación y servicio desarrollando competencias en el uso de las TIC mediante herramientas tecnológicas que apoyen la práctica docente como la aplicación móvil del Diario Interactivo, los e-portafolios, donde el estudiante capture sus momentos de aprendizaje y obtenga a través de la reflexión de los escenarios un aprendizaje constructivista. DidacTIC impulsa el uso de las TIC con el afán de ser partícipe del desarrollo educativo y tecnológico en Oaxaca.
          </p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" >
        <img src="images/didactico.png" style="position: relative; width: 75%; height: auto; left: 12%;" />
      </div>
    </div>

       </div>
   </section>
@endsection


@section('contacto')
<section id="main-tmpl">
        <div class="item " id="contacto">


      <div class="container-fluid">
        <div class="row" >
          <div   class="col-lg-10" class="col-md-8" class="col-sm-10"  class="col-xl-12">
            <img src="images/mochis.png"  width="300" height="400" class="img-responsive" align="left" >
            <br>
            <br>
            <h3 class="redes"><p>
                <a class="txtwhi" target="_blank" href="https://www.facebook.com/didactic/"> <img src="images/sobre.svg" width="40" height="40" > didaticsoax@gmail.com  <br clear="none"></a></p></h3>
                <br>
                <br>
                 <h3><p><a class="txtwhi" target="_blank" href="https://www.gmail.com/didactic/"> <img src="images/facebook.svg" width="40" height="40" > didaticsoax@gmail.com</a></p></h3>
         </div>
      </div>
    </div>
 </div>
   </section>






@endsection

@section('footer')
  <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12" >
<center>
            <p class="txtwhi"> <strong class="txtwhi">didaticsoax@gmail.com </strong>   &nbsp;&copy;2018- Todos los derechos reservados. Diseñado por <a class="txtwhi" href="index.php">DidacTIC--Diseño Didactico Interactivo AC</a></p>
    </center>
          </div>

          <div class="col-sm-12 text-xs-right" style="padding-top: 2%;"><center>
            <ul class="list-inline">

              <li class="list-inline-item">
                <a class="txtwhi"  href="index.php">Inicio</a>
              </li>
              <li class="list-inline-item">
                <a class="txtwhi" href="aviso.html">Aviso legal</a>
              </li>
              <li class="list-inline-item">
                <a class="txtwhi" href="#" data-toggle="modal" data-target="#miMod666">Terminos y condiciones</a>
              </li>
            </ul></center>
          </div>
        </div>
      </div>



      <div class="modal fade" id="miMod666" tabindex="-1" role="dialog" arialabelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title">Términos y condiciones</h5>
                    <button type="button" class="close" data-dismiss="modal" arialabel="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                <div class="contenedor">
                <div class="Terminos">
                    <h4> <p> He leído y acepto los términos de la aplicación.
      Es responsable del uso de los servicios por cualquier contenido que publique y de las consecuencias derivadas. El contenido que envíe, publique o muestre podrá ser visto por otros usuarios de los servicios a través de servicios y sitios web de terceros. Solo deberá proporcionar el contenido que quiera compartir con otras personas en estos Término. Tip: Lo que digas en Mi Diario se verá alrededor del mundo instantáneamente. ¡Eres lo que publicas! El usuario únicamente podrá hacer uso de estos servicios si acepta un contrato vinculante con Mi Diario como también a recibir dichos servicios según las leyes de México u otra jurisdicción aplicable. El usuario solo podrá hacer uso de dicho Servicios conforme a dichas condiciones como a toda ley, normativa o reglamento aplicable sea local, estatal, nacional o internacional.
      </p></h4>
           </div>
           </div>

           </div>
          </div>
        </div>
        </div>

    </footer>
@endsection


@yield('main-content')
@yield('nosotros')
@yield('contacto')
@yield('footer')
