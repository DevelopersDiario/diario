<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;



class GrupoController extends Controller
{


	public function index()
	{
	    return view('grupos');
	}



	public function obtenerGrupos(){
		$gruposhow = DB::table('grupo')->orderByRaw('idgrupo DESC')->get();
		$grupoSeguir = DB::table('grupodetalle')->WHERE('idusuario', Auth::user()->idusuario)->get();

		return view('grupos', array(
			"gruposhow" => $gruposhow, "grupoSeguir" => $grupoSeguir
		));
	}


	/*public function obtenerGruposHome(){
		$gruposhow = DB::table('grupo')->orderByRaw('idgrupo DESC')->get();
		return view('home', array(
			"gruposhow" => $gruposhow
		));
	}*/

	public function createGrupo(Request $request){
		$efcha = date('Y-m-d H:i:s');

		$pblcn = DB::table('grupo')->insert(array(
			'idgrupo' => 0,
			'nombregrupo' => $request->input('nombreGrupo'),
			'usuarioalumno' => $request->input('idUsuario'),
			'nombreusuario' => $request->input('nombreUsuario'),
			'fecha' => $efcha,
			'vigenciahasta' => $request->input('vigenciaGrupo'),
			'estatus' => 1
		));

		    	return redirect('grupos');

	}


	/*
nombreGrupo
idUsuario
nombreUsuario
vigenciaGrupo
	*/

/*









*/

}
