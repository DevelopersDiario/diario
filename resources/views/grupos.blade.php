@extends('layouts.app')
  <link rel="stylesheet" href="{{ asset('css/newStyle.css') }}"/>




@section('content')
<div class="container" style="margin-top: 5%; background-color: #ffffff;">
	<div class="container cont-1">

		  <div class="btn-group-vertical btn-block">
		    <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#crearGrupo">Crear Grupo</button>
		    	<!----------------------ModalCrearGruo---------------------->
		    	<div id="crearGrupo" class="modal fade" role="dialog">
		      <div class="modal-dialog">

		        <!-- Modal content-->
		        <div class="modal-content">
		          <div class="modal-header">
		            <button type="button" class="close" data-dismiss="modal">&times;</button>

		          </div>
		          <div class="modal-body" >
		            <div class="container" >
		              <form action="{{action('GrupoController@createGrupo')}}" id="createGrupo" method="post" id="createGrupo">
		              	{{csrf_field()}}
		                <label for="nombregrupo" alt="Nombre del grupo">Nombre del grupo:</label>
		                <input class="form-control" type="text" name="nombreGrupo"  placeholder="Nombre del grupo"><br>

		                <input class="form-control" type="hidden" name="idUsuario"  value="{{ Auth::user()->id }}"  readonly="">
		                <input class="form-control" type="hidden" name="nombreUsuario" value="{{ Auth::user()->name }}"  readonly="">
		                <label for="vigencia" placeholder="Vigencia del grupo" alt="Vigencia del grupo">Vigencia del grupo:</label>
		                <input class="form-control" type="date" name="vigenciaGrupo" id="vigencia"><br>

		                <input type="submit" class="btn btn-success" value="Crear Grupo">
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

			<button class="accordion">Lista de grupos</button>
			<div class="panel">
				<!-- @if(session('success'))
        <div class="alert alert-primary" role="alert">
            {{session('success')}}
        </div>
				@endif -->
      

		   	 <table class="table table-responsive">
		   		     	<tr>
		   		     		<th>Nombre</th>
		   		     		<th>Creador</th>
		   		     		<th>Fecha de creacion</th>
		   		     		<th>Vigencia</th>
		   		     		<th>Estatus</th>
		   		     		<th>Seguir</th>
		   		     	</tr>
		   		     	@foreach ($gruposhow as $gpo)
		   		     	<tr>
		   		     		<td>{{$gpo->nombregrupo}}</td>
		   		     		<td>{{$gpo->nombreusuario}}</td>
		   		     		<td>{{$gpo->fecha}}</td>
		   		     		<td>{{$gpo->vigenciahasta}}</td>
		   		     		<?php if ($gpo->estatus === 1) {
		   		     			echo "<td>Activo</td>";
		   		     		}else{echo "<td>Inactivo</td>";} ?>

		   		     		<td><form action="{{action('GruposViewsController@index')}}" method="get">{{csrf_field()}}<input type="hidden" value="{{$gpo->idgrupo}}" name="idgrupo"><input type="submit" class="btn btn-small btn-primary"  value="Ver grupo"></form>
		   		     			
		   		     		</td>


		   		     	</tr>
		   		     	@endforeach
		   		     </table>
			</div>


		    <!-- <button type="button" class="btn btn-info btn-block">Calendario</button> -->
		    <div style="overflow:hidden;">
		        <div class="form-group">
		            <div class="row">
		                <div class="col-md-8">
		                    <div id="datetimepicker12"></div>
		                </div>
		            </div>
		        </div>
		    </div>
		  </div>

	</div>
</div><script>
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
@endsection
