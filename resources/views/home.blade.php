@extends('layouts.app')
  <link rel="stylesheet" href="{{ asset('css/newStyle.css') }}"/>




@section('content')
<section class="form-control" id="sw" style="height: auto; padding-top: 3%;">
  <nav class="card-text" id="startTime" style="margin:10px !important; font-weight:bold;"></nav>
  <div class=" " id="inicio">
    @if(session('alert'))
    <div class="alert alert-danger" style="height:auto;padding-top;3%;margin-top:1%;" id="inicio">
      {{session('alert')}}
    </div>
    @endif
    <div class="container" id="fghjk">
    <div class="row">
    <!--  <div class="col-xs-12 col-sm-12 col-md-4  bg-light ">
        <div class="container containerimg">
          <img src="{{ Auth::user()->foto }}" class="img100" alt="">
          <button  class="btn btn-primary btn-block float-left" width="80" height="50" data-toggle="modal" data-target="#cambiaImagen">Cambiar Imagen</button> 
           </div>
      </div>-->


          <!----------------------ModalCambia imagen---------------------->
          <div id="cambiaImagen" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <br>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body" >
                  <form class="md-form" action="{{action('ImagesController@store')}}" method="post" id="frm" files="true" enctype="multipart/form-data">
                  {{csrf_field()}}

                  <input type="hidden" value="{{ Auth::user()->idusuario }}" name="idUsuario">
                  <br>                

                  <input type="file" name="Archivo"  />                 
 

                  <input type="submit" value="Cambiar Imagen" class="btn btn-primary btn-block float-left" width="80" height="50">

                  </form>
                </div>
                <div class="modal-footer">
                  <br>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
          <!----------------------MOdal ENd---------------------->

       
     <!-- <div class="col-xs-12 col-sm-12 col-md-8 bg-secondary ">
               <div class="container cotainercover">
                 <img src="{{ Auth::user()->fportada }}" class="img100cover" alt="">
                <button  class="btn btn-primary btn-block float-left" width="80" height="50" data-toggle="modal" data-target="#cambiaPortada">Cambiar Portada</button>
 </div>
</div>-->
               <!----------------------ModalCambia portada---------------------->
               <div id="cambiaPortada" class="modal fade" role="dialog">
                 <div class="modal-dialog modal-sm">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <div class="modal-body" >
                       <form action="{{action('ImagesController@changeCover')}}"  method="post"  files="true" enctype="multipart/form-data">
                         {{csrf_field()}}
                         <input type="hidden" value="{{ Auth::user()->idusuario }}" name="idUsuariodos">
                         <input type="file" name="ArchivoCover"  />
                         <input type="submit" value="Cambiar Portada" class="btn btn-primary btn-block float-left" width="80" height="50">
                       </form>
                     </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                   </div>
                 </div>
               </div>
               <!----------------------MOdal ENd---------------------->
              
      
    </div>

    </div>
  </div>




  <div class="container">
    <div class="row">
      <div class="col-12 bg-light">
          <div class="card">
            <div class="card-header">
              Crea una publicación
            </div>
            <div class="card-body">
               @include('flash::message')
              <div class="form-group">
                <form  action="{{action('PublicacionController@post')}}" method="post" enctype="multipart/form-data"
>
                  {!! csrf_field() !!}
                  <input type="hidden" value="{{ Auth::user()->idusuario }}" name="idUsuaior">
                  <input class="form-control" rows="3" id="titulo" name="titulo" placeholder="Escriba un título:"/>
                  <br>
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9">
                      <textarea class="form-control" rows="5" placeholder="¿Que estas pensando...?" id="comentario" name="comentario"></textarea>
                    </div>
					    </div>
					<br>
					 <div class="row">
					
                    <div class="col-xs-12 col-sm-12 col-md-9">
                      <div class="input-group mb-3">

                        <select class="custom-select" id="grupo" name="grupo">
                          <option disabled selected>Seleccione el grupo al que va dirigida la publicación</option>
                          @foreach ($gruposhow as $gpo)                  
                            <option value="{{$gpo->idgrupo}}">{{$gpo->nombregrupo}}</option>                  
                          @endforeach
                        </select>

						
                        <div class="input-group-append">
                            <label class="input-group-text" for="inputGroupSelect02">Elegir</label>
                        </div>						
                      </div>  
					  
                     
                    </div>
					 </div>
              
				  <br>
                  <div class="row">
				  
                    <div class="col-xs-12 col-sm-12 col-md-9">
                      <textarea class="form-control" rows="5" placeholder="¿Que esta pasando?" id="comentario" name="comentario"></textarea>
                    </div>				
				
					</div>
						<br>
					
				  <div class="row">
				   <div class="col-xs-12 col-sm-12 col-md-9">
                      <textarea class="form-control" rows="6" placeholder="¿Que estas pensando y sintiendo?" id="comentario2" name="comentario2"></textarea>
                    </div >
					<br>	
				  </div>
				  <br>
				  <div class="row">
				   <div class="col-xs-12 col-sm-12 col-md-9">
                      <textarea class="form-control" rows="6" placeholder="¿Que es lo bueno y malo de esta experiencia?" id="comentario3" name="comentario3"></textarea>
                    </div >
					<br>	
				  </div>
				  <br>
				   <div class="row">
				   <div class="col-xs-12 col-sm-12 col-md-9">
                      <textarea class="form-control" rows="6" placeholder="¿Que más podria haber hecho?" id="comentario4" name="comentario4"></textarea>
                    </div >
					<br>	
				  </div>
				  <br>
				   <div class="row">
				   <div class="col-xs-12 col-sm-12 col-md-9">
                      <textarea class="form-control" rows="6" placeholder="¿Que haria en una experiencia similar?" id="comentario5" name="comentario5"></textarea>
                    </div >
					<br>	
				  </div>
				  <br>
				  <!--div class="row">
				  <div class="col-xs-12 col-sm-12 col-md-9">					
                      <textarea class="form-control" placeholder="¿Que estas pensando y sintiendo?" id="comentario33" name="comentario6"></textarea>
                    </div>
					<br>
					
					 <span class="btn btn-default ">
                            <input type="file"  name="archiovs[]" multiple >
                      </span>
				  </div-->
				  
                        <div class="input-group-append">
                            <label class="input-group-text" for="inputGroupSelect02">Elegir</label>
                        </div>
                      </div>  
                      <!--<span class="btn btn-default ">
                            // <input type="file"  name="archiovs[]" multiple >
                      // </span>-->
                    </div>
                  </div><br>
                  <input type="submit" class="btn btn-primary" value="Publicar">
              </div>
            </div>
          </div>


        </div>
            </form>
      </div><!--END container-->
    </div><!--END row-->
  </div><!--END col-12 bg-light-->
</section>



<section id="main-tmpl">
  <div class="item " id="configuracion" style="padding-top: 5%;">
    <div class="container">


      <div class="container mgb10">
            <div class="row justify-content-center">
                <div class="col-md-12">



                    <div class="card bg-light">
                        <div class="card-header" style="background-color: #000000 !important;">Publicaciones</div>

                        <div class="card-body">
                        @foreach ($publicacion as $pb)
                          @foreach ($pb as $pbcl)
                              <div class="card" style="width: 100%;">

                                 <!--<img class="card-img-top" height="100" width="100" src="..." alt="Card image cap">-->
                                 @if($pbcl->planaccion != "")

                                  <?php  $cadena=$pbcl->planaccion; ?>
                                  <?php  $porciones = explode(',', $cadena); ?>
                                   @for($i=0; $i < count($porciones)-1; $i++) 
                                     <?php  $verex = explode(".", $porciones[$i]);?>
                                     @if($verex[1] == "jpg" || $verex[1] == "jpeg" || $verex[1] == "png" || $verex[1] == "gif")
                                       <img src='images/imagesOrFilesPost/{{$porciones[$i]}}' class="card-img-top" style="position: relative;width: 50%; height: auto; left: 25%;" />
                                     @endif
                                     @if($verex[1] == "pdf")
                                       <a href='images/imagesOrFilesPost/{{$porciones[$i]}}' style="position: relative;width: 25%; height: auto; left: 37%;" download ><img src='images/iconos/pdf.ico' class="card-img-top" /><br>{{$porciones[$i]}}</a>
                                     @endif
                                     @if($verex[1] == "doc" || $verex[1] == "docx")
                                       <a href='images/imagesOrFilesPost/{{$porciones[$i]}}' style="position: relative;width: 25%; height: auto; left: 37%;" download ><img src='images/iconos/word.png' class="card-img-top" /><br>{{$porciones[$i]}}</a>
                                     @endif
                                     @if($verex[1] == "ppt" || $verex[1] == "pptx")
                                       <a href='images/imagesOrFilesPost/{{$porciones[$i]}}' style="position: relative;width: 25%; height: auto; left: 37%;" download ><img src='images/iconos/pp.ico' class="card-img-top" /><br>{{$porciones[$i]}}</a>
                                     @endif
                                     @if($verex[1] == "xls" || $verex[1] == "xlsx")
                                       <a href='images/imagesOrFilesPost/{{$porciones[$i]}}' style="position: relative;width: 25%; height: auto; left: 37%;" download ><img src='images/iconos/excel.ico' class="card-img-top" /><br>{{$porciones[$i]}}</a>
                                     @endif
                                     @if($verex[1] == "rar")
                                       <a href='images/imagesOrFilesPost/{{$porciones[$i]}}' style="position: relative;width: 25%; height: auto; left: 37%;" download ><img src='images/iconos/rar.ico' class="card-img-top" /><br>{{$porciones[$i]}}</a>
                                     @endif
                                     @if($verex[1] == "zip")
                                       <a href='images/imagesOrFilesPost/{{$porciones[$i]}}' style="position: relative;width: 25%; height: auto; left: 37%;" download ><img src='images/iconos/zip.png' class="card-img-top" /><br>{{$porciones[$i]}}</a>
                                     @endif
                                   @endfor
                                 @endif

                                 <div class="card-body">
                               
                                 <h5 class="card-tittle"> {{ $pbcl->titulo}} </h5>
                               
                                
                                  <p class="card-text">{{$pbcl->observaciones}}</p>
                                  
                                  @if($pbcl->idusuario == Auth::user()->idusuario)
                                   <form  action="{{action('PublicacionController@eliminarp')}}" method="post">
                                                      {{csrf_field()}}

                                     <input type="hidden" value="{{$pbcl->idpublicacion }}" name="idpublicacionaeliminar">
                                     <input type="image" src="images/iconos/delete.png" width="35px" style="float: right;">
                                   </form>
                                  
                                  @endif
                                  
                                 <!-- <a href="#" class="btn btn-primary">Go somewhere</a>-->
                                </div>
                              </div>
                          @endforeach
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
  </div>


</section>


<script type="text/javascript">
 $(function() {

     // preventing page from redirecting
     $("html").on("dragover", function(e) {
         e.preventDefault();
         e.stopPropagation();
         $("h1").text("Drag here");
     });

     $("html").on("drop", function(e) { e.preventDefault(); e.stopPropagation(); });

     // Drag enter
     $('.upload-area').on('dragenter', function (e) {
         e.stopPropagation();
         e.preventDefault();
         $("h1").text("Drop");
     });

     // Drag over
     $('.upload-area').on('dragover', function (e) {
         e.stopPropagation();
         e.preventDefault();
         $("h1").text("Drop");
     });

     // Drop
     $('.upload-area').on('drop', function (e) {
         e.stopPropagation();
         e.preventDefault();

         $("h1").text("Upload");

         var file = e.originalEvent.dataTransfer.files;
         var fd = new FormData();

         fd.append('file', file[0]);

         uploadData(fd);
     });

     // Open file selector on div click
     $("#uploadfile").click(function(){
         $("#file").click();
     });

     // file selected
     $("#file").change(function(){
         var fd = new FormData();

         var files = $('#file')[0].files[0];

         fd.append('file',files);

         uploadData(fd);
     });


     $("#uploadfiletwo").click(function(){
         $("#filetwo").click();
     });

     // file selected
     $("#filetwo").change(function(){
         var fd = new FormData();

         var files = $('#filetwo')[0].files[0];

         fd.append('file',files);

         uploadData(fd);
     });
 });

 // Sending AJAX request and upload file
 function uploadData(formdata){

     $.ajax({
         url: 'upload.php',
         type: 'post',
         data: formdata,
         contentType: false,
         processData: false,
         dataType: 'json',
         success: function(response){
             addThumbnail(response);
         }
     });
 }

 // Added thumbnail
 function addThumbnail(data){
     $("#uploadfile h1").remove();
     var len = $("#uploadfile div.thumbnail").length;

     var num = Number(len);
     num = num + 1;

     var name = data.name;
     var size = convertSize(data.size);
     var src = data.src;

     // Creating an thumbnail
     $("#uploadfile").append('<div id="thumbnail_'+num+'" class="thumbnail"></div>');
     $("#thumbnail_"+num).append('<img src="'+src+'" width="100%" height="78%">');
     $("#thumbnail_"+num).append('<span class="size">'+size+'<span>');

 }

 // Bytes conversion
 function convertSize(size) {
     var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
     if (size == 0) return '0 Byte';
     var i = parseInt(Math.floor(Math.log(size) / Math.log(1024)));
     return Math.round(size / Math.pow(1024, i), 2) + ' ' + sizes[i];
 }


 // fecha
 function startTime(){
    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
    var f=new Date();
    	  //document.getElementById('reloj').innerHTML=(diasSemana[f.getDay()] + " " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
    today=new Date();h=today.getHours();m=today.getMinutes();s=today.getSeconds();m=checkTime(m);
    s=checkTime(s);document.getElementById('startTime').innerHTML= "&nbsp;&nbsp;"+(diasSemana[f.getDay()] + " " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear())/*+", "+h+":"+m+":"+s*/ ;t=setTimeout('startTime()',500);
    	 }

    function checkTime(i) {
    if(i<10){
    	i="0" + i;
    }
    return i;
    }

    window.onload=function(){
    startTime();+Fecha();

    }



    $('div.alert').not('.alert-important').delay(4500).fadeOut(5550);
</script>
@endsection






<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> -->
