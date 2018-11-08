@extends('layouts.app')
  <link rel="stylesheet" href="{{ asset('css/newStyle.css') }}"/>

      <div class="container mgtop10">
        <div class="card ">
          <div class="card-header btn-info">
            @foreach ($pb22 as $pbcl22)      
              <p class="text-dar">NOMBRE GRUPO:  {{ $pbcl22->nombregrupo}} </p>         
            @endforeach

              @if($pb33 == 1)
             
              <form action="{{action('SeguirGrupoController@dejarSeguirGrupo')}}" method="post">{{csrf_field()}}<input type="hidden" value="{{$pbcl22->idgrupo}}" name="grupoSeguir"><input type="submit" class="btn btn-small btn-warning"  value="Dejar de seguir"></form>    
              @elseif($pb33 != 1)
                @foreach ($pb22 as $pbcl22)      
          
                  <form action="{{action('SeguirGrupoController@seguirGrupo')}}" method="post">{{csrf_field()}}<input type="hidden" value="{{$pbcl22->idgrupo}}" name="grupoSeguir"><input type="submit" class="btn btn-small btn-primary"  value="Seguir"></form>    

                @endforeach
              @endif            
            



            
             @include('flash::message')
         
          </div>
        </div>  
      </div>


      <div class="container mgb10">
            <div class="row justify-content-center">
                <div class="col-md-12">



                    <div class="card bg-light">
                        <div class="card-header" style="background-color: #000000 !important;">Publicaciones</div>
                        @if($pb33 == 1)
                        
                        <div class="card-body">
                        
                          @foreach ($pb as $pbcl)
                              <div class="card mgb10">
                                <div class="card-header btn-info">
                                 <p class="text-dar"> {{ $pbcl->titulo}} </p>
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$pbcl->observaciones}}</h5>
                                  <div class="row">
                                    @if($pbcl->planaccion != "")

                                     <?php  $cadena=$pbcl->planaccion; ?>
                                     <?php  $porciones = explode(',', $cadena); ?>
                                      @for($i=0; $i < count($porciones)-1; $i++) 
                                        <?php  $verex = explode(".", $porciones[$i]);?>
                                        @if($verex[1] == "jpg" || $verex[1] == "jpeg" || $verex[1] == "png" || $verex[1] == "gif")
                                          <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'><img src='images/imagesOrFilesPost/{{$porciones[$i]}}' width='100%' height='auto'/></div>
                                        @endif
                                        @if($verex[1] == "pdf")
                                          <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'><a href='images/imagesOrFilesPost/{{$porciones[$i]}}' download><img src='images/iconos/pdf.ico' width='150px' height='150px'/><br>{{$porciones[$i]}}</a></div>
                                        @endif
                                        @if($verex[1] == "doc" || $verex[1] == "docx")
                                          <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'><a href='images/imagesOrFilesPost/{{$porciones[$i]}}' download><img src='images/iconos/word.png' width='150px' height='150px'/><br>{{$porciones[$i]}}</a></div>
                                        @endif
                                        @if($verex[1] == "ppt" || $verex[1] == "pptx")
                                          <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'><a href='images/imagesOrFilesPost/{{$porciones[$i]}}' download><img src='images/iconos/pp.ico' width='150px' height='150px'/><br>{{$porciones[$i]}}</a></div>
                                        @endif
                                        @if($verex[1] == "xls" || $verex[1] == "xlsx")
                                          <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'><a href='images/imagesOrFilesPost/{{$porciones[$i]}}' download><img src='images/iconos/excel.ico' width='150px' height='150px'/><br>{{$porciones[$i]}}</a></div>
                                        @endif
                                        @if($verex[1] == "rar")
                                          <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'><a href='images/imagesOrFilesPost/{{$porciones[$i]}}' download><img src='images/iconos/rar.ico' width='150px' height='150px'/><br>{{$porciones[$i]}}</a></div>
                                        @endif
                                        @if($verex[1] == "zip")
                                          <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'><a href='images/imagesOrFilesPost/{{$porciones[$i]}}' download><img src='images/iconos/zip.png' width='150px' height='150px'/><br>{{$porciones[$i]}}</a></div>
                                        @endif
                                      @endfor
                                    @endif
                                  </div>
                                 <!-- <a href="#" class="btn btn-primary">Go somewhere</a>-->
                                </div>
                              </div>                          
                          @endforeach
                        </div>
                        @elseif($pb33 != 1)
                        <p>Este grupo cuenta con {{$pb44}} publicaciones</p>
                        <h3>(Debes seguir a este grupo para poder ver las publicaciones)</h3>
                        @endif   
                    </div>
                </div>
            </div>
           
        </div>



        <script>
              var acc = document.getElementsByClassName("accordion");
              var i;

              for (i = 0; i < acc.length; i++) {
                  acc[i].addEventListener("click", function() {
                      /* Toggle between adding and removing the "active" class,
                      to highlight the button that controls the panel */
                      this.classList.toggle("active");

                      /* Toggle between hiding and showing the active panel */
                      var panel = this.nextElementSibling;
                      if (panel.style.display === "block") {
                          panel.style.display = "none";
                      } else {
                          panel.style.display = "block";
                      }
                  });
              }


              $('div.alert').not('.alert-important').delay(1500).fadeOut(350);

            </script>