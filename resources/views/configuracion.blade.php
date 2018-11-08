@extends('layouts.app')
  <link rel="stylesheet" href="{{ asset('css/newStyle.css') }}"/>




@section('content')
<section class="container">
	<div class="row">
	  <div class="col-12 bg-light">
	    <div class="container cont-1">
	          <div class="container">
	          	  	        <div class="card bg-secondary cont-21">
	          	  	          <div class="card-header">Datos Personales</div>
	          				<div class="card-body text-justify" style="padding: 5%;">
	          					@foreach ($infoshow as $pb)
	          					  <p class="txtwhi"><strong>Nombre: </strong> {{$pb->nombre}}</p>
	          					  <p class="txtwhi"><strong>Apellidos: </strong> {{$pb->apellidos}}</p>
	          					  <p class="txtwhi"><strong>Genero: </strong> {{$pb->genero}}</p>
	          					  <p class="txtwhi"><strong>Fecha de nacimiento: </strong> {{$pb->fnacimiento}}</p>
	          					  <p class="txtwhi"><strong>Vigencia: </strong> {{$pb->vigencia}}</p>
	          					  <p class="txtwhi"><strong>Correo: </strong> {{$pb->correo}}</p>
	          					  <p class="txtwhi"><strong>Telefono: </strong> {{$pb->telefono}}</p>
	          					  <p class="txtwhi"><strong>Institucion: </strong> {{$pb->institucion}}</p>
	          					  <p class="txtwhi"><strong>Grupo: </strong> {{$pb->grupo}}</p>
	          					  <p class="txtwhi"><strong>Estado: </strong> {{$pb->estado}}</p>
	          					@endforeach
	          				</div>
	          	  	          <div class="card-body text-center">
	          	  	            <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#informacionPersonal">Actualizar información personal</button>
	          	  	            <!----------------------ModalCmbiarPass---------------------->
	          	  	            <div id="informacionPersonal" class="modal fade" role="dialog">
	          	  	              <div class="modal-dialog">

	          	  	                <!-- Modal content-->
	          	  	                <div class="modal-content">
	          	  	                  <div class="modal-header">
	          	  	                    <h3>Actualiza tu información personal</h3>
	          	  	                    <button type="button" class="close" data-dismiss="modal">&times;</button>

	          	  	                  </div>
	          	  	                  <div class="modal-body" >
	          	  	                    <div class="container" >
	          	  						<form action="{{action('UpdateConfigController@updateInfo')}}" method="post">
	          	  								{!! csrf_field() !!}
	          	  							  <input class="form-control" type="hidden" name="idusuariooo" value="{{ Auth::user()->idusuario }}"><br>
	          	  							<label for="name">Nombre(s)</label>
	          	  							<input class="form-control" type="text" name="name" placeholder="Nombre"><br>
	          	  							<label for="apellidos">Apellidos</label>
	          	  							<input class="form-control" type="text" name="apellidos" placeholder="Apellidos"><br>
	          	  							<label for="genero">Selecciona tu genero:</label>
	          	  							<select class="form-control" name="genero" >
	          	  								<option value="">Selecciona</option>
	          	  								<option value="Hombre">Hombre</option>
	          	  								<option value="Mujer">Mujer</option>
	          	  							</select>
	          	  							<label for="fnacimiento">Selecciona tu fecha de nacimiento</label>
	          	  							<input class="form-control" type="date" name="fnacimiento" placeholder=""><br>
	          	  							<label for="telefono">Telefono</label>
	          	  							<input class="form-control" type="phone" name="telefono" placeholder="Telefono"><br>
	          	  							<input type="submit" value="Cambiar">
	          	  						</form>
	          	  	                    </div>
	          	  	                  </div>
	          	  	                  <div class="modal-footer">
	          	  	                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	          	  	                  </div>
	          	  	                </div>

	          	  	              </div>
	          	  	            </div>
	          	  	            <!----------------------MOdal ENd---------------------->
	          	  	            <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#formacionAcademica">Actualizar información académica</button>
	          	  	            <!----------------------ModalCmbiarPass---------------------->
	          	  	            <div id="formacionAcademica" class="modal fade" role="dialog">
	          	  	              <div class="modal-dialog">

	          	  	                <!-- Modal content-->
	          	  	                <div class="modal-content">
	          	  	                  <div class="modal-header">
	          	  	                    <h3>Formación Académica</h3>
	          	  	                    <button type="button" class="close" data-dismiss="modal">&times;</button>

	          	  	                  </div>
	          	  	                  <div class="modal-body" >
	          	  	                    <div class="container" >
	          	  	                    	<form action="{{action('UpdateConfigController@updateInfoAcademica')}}" method="post">
	          	  	                    			{!! csrf_field() !!}
	          	  	                    		  <input class="form-control" type="hidden" name="idusuariooo" value="{{ Auth::user()->idusuario }}"><br>

	          	  	                    		<label for="institucion">Institución</label>
	          	  	                    		<input class="form-control" type="text" name="institucion" placeholder="institucion"><br>
	          	  	                    		<label for="genero">Selecciona tu grupo:</label>
	          	  	                    		<select class="form-control" name="grupo" >
	          	  	                    			<option value="">Selecciona</option>
	          	  	                    			@foreach ($grupos as $gpos)
	          	  	                    			<option value="{{$gpos->nombregrupo}}">{{$gpos->nombregrupo}}</option>
	          	  	                    			@endforeach
	          	  	                    		</select>

	          	  	                    		<input type="submit" value="Cambiar">
	          	  	                    	</form>
	          	  	                    </div>
	          	  	                  </div>
	          	  	                  <div class="modal-footer">
	          	  	                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	          	  	                  </div>
	          	  	                </div>

	          	  	              </div>
	          	  	            </div>
	          	  	            <!----------------------MOdal ENd---------------------->
	          	  	            <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#informacionSocial">Actualizar información social</button>
	          	  	            <!----------------------ModalCmbiarPass---------------------->
	          	  	            <div id="informacionSocial" class="modal fade" role="dialog">
	          	  	              <div class="modal-dialog">

	          	  	                <!-- Modal content-->
	          	  	                <div class="modal-content">
	          	  	                  <div class="modal-header">
	          	  	                    <h3>Información Social</h3>
	          	  	                    <button type="button" class="close" data-dismiss="modal">&times;</button>

	          	  	                  </div>
	          	  	                  <div class="modal-body" >
	          	  	                    <div class="container" >
	          	  	                    	<form action="{{action('UpdateConfigController@updateInfoSocial')}}" method="post">
	          	  	                    			{!! csrf_field() !!}
	          	  	                    		  <input class="form-control" type="hidden" name="idusuariooo" value="{{ Auth::user()->idusuario }}"><br>
	          									<input type="textarea" name="estado">
	          									<input type="submit" value="Actualizar">
	          								</form>
	          	  	                    </div>
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
	           
	              <div class="card bg-secondary cont-21">
	                <div class="card-header">Configuración</div>
	                <div class="card-body text-center">
	                  <p class="card-text" style="color:#fff !important;">Cambiar Tema</p>
	                  <div class="form-group">
	                    <select class="form-control" id="sel1">
	                      <option>Tema 1</option>
	                      <option>Tema 2</option>
	                    </select>
	                  </div>
	                  <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#cambiarPassword">Cambiar mi Contraseña</button>
	                  <!----------------------ModalCmbiarPass---------------------->
	                  <div id="cambiarPassword" class="modal fade" role="dialog">
	                    <div class="modal-dialog">

	                      <!-- Modal content-->
	                      <div class="modal-content">
	                        <div class="modal-header">
	                          <button type="button" class="close" data-dismiss="modal">&times;</button>

	                        </div>
	                        <div class="modal-body" >
	                          <div class="container" >
	                            <form  action="{{action('UpdateConfigController@updatePassword')}}" method="post" >

	                              <input class="form-control" type="hidden" name="idusuario" value="{{ Auth::user()->idusuario }}"><br>
	      						{!! csrf_field() !!}

	                              <label for="newPassword" placeholder="Introduce tu nueva contraseña" alt="Nueva contraseña">Introduce tu nueva contraseña:</label>
	                              <input class="form-control" type="password" name="newpassword" id="newpassword"><br>

	                              <input type="submit" class="btn btn-success" value="Cambiar contraseña">
	                            </form>
	                          </div>
	                        </div>
	                        <div class="modal-footer">
	                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                        </div>
	                      </div>

	                    </div>
	                  </div>
	                  <!----------------------MOdal ENd---------------------->
	                  <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#cambiarCorreo">Cambiar mi Correo</button>
	                  <!----------------------ModalCmbiarPass---------------------->
	                  <div id="cambiarCorreo" class="modal fade" role="dialog">
	                    <div class="modal-dialog">

	                      <!-- Modal content-->
	                      <div class="modal-content">
	                        <div class="modal-header">
	                          <button type="button" class="close" data-dismiss="modal">&times;</button>

	                        </div>
	                        <div class="modal-body" >
	                          <div class="container" >
	                            <form action="{{action('UpdateConfigController@updateEmail')}}" method="post" id="formChangeEmail">
	                            	{!! csrf_field() !!}
	                              <input class="form-control" type="hidden" name="idusuarioo" value="{{ Auth::user()->idusuario }}"><br>


	                              <label for="newCorreo" placeholder="Introduce tu nueva correo" alt="Nuevo correo">Introduce tu nuevo correo:</label>
	                              <input class="form-control" type="email" name="newCorreo" id="newCorreo"><br>

	                              <input type="submit" class="btn btn-success" value="Cambiar correo">
	                            </form>
	                          </div>
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
	    </div>



	  </div>



	</div>
</section>
@endsection
