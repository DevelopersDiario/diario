<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use View;




class UpdateConfigController extends Controller
{




	/*public function getInfo()
	{
		$infoshow = DB::table('users')->where('id', Auth::user()->id)->get();

		return \View::make('configuracion',array("infoshow" => $infoshow));



	}*/
    //
    public function updatePassword(Request $request)
    {
    	$pblcc = DB::table('usuario')->where('idusuario', $request->input('idusuario'))->update(['password'  => bcrypt($request->input('newpassword'))]);

    	auth()->logout();

    	session()->flash('message', 'Some goodbye messag');

    	return redirect('/login');
    }

    public function updateEmail(Request $request)
    {
    	$pblcc = DB::table('usuario')->where('idusuario', $request->input('idusuarioo'))->update(['correo'  => $request->input('newCorreo')]);
    	auth()->logout();

    	session()->flash('message', 'Some goodbye messag');

    	return redirect('/login');
    }

    /*name
    apellidos
    fnacimiento
    telefono*/


    /*
name
apellidos
genero
fnacimiento
cuenta
password
vigencia
email
telefono
institucion
grupo
estado

    */

    public function updateInfo(Request $request)
    {
    	//
    	$id = $request->input('idusuariooo');
    	$name = $request->input('name');
    	$apellidos = $request->input('apellidos');
    	$genero = $request->input('genero');
    	$fnacimiento = $request->input('fnacimiento');
    	$telefono = $request->input('telefono');


    	if($name != ''){ $pblcc = DB::table('usuario')->where('idusuario', $id)->update(['nombre'  => $name]); }
    	if($apellidos != ''){ $pblcc2 = DB::table('usuario')->where('idusuario', $id)->update(['apellidos'  => $apellidos]); }
    	if($genero != ''){ $pblcc2 = DB::table('usuario')->where('idusuario', $id)->update(['genero'  => $genero]); }
    	if($fnacimiento != ''){ $pblcc3 = DB::table('usuario')->where('idusuario', $id)->update(['fnacimiento'  => $fnacimiento]); }
    	if($telefono != ''){ $pblcc4 = DB::table('usuario')->where('idusuario', $id)->update(['telefono'  => $telefono]); }

    	return redirect('configuracion');
    }




    public function updateInfoAcademica(Request $request)
    {
    	//
    	$id = $request->input('idusuariooo');
    	$institucion = $request->input('institucion');
    	$grupo = $request->input('grupo');

    	if($institucion != ''){ $pblcc = DB::table('usuario')->where('idusuario', $id)->update(['institucion'  => $institucion]); }
    	if($grupo != ''){ $pblcc2 = DB::table('usuario')->where('idusuario', $id)->update(['grupo'  => $grupo]); }


    	return redirect('configuracion');
    }


    public function updateInfoSocial(Request $request)
    {
    	//
    	$id = $request->input('idusuariooo');
    	$institucion = $request->input('institucion');
    	$estado = $request->input('estado');

    	if($institucion != ''){ $pblcc = DB::table('usuario')->where('idusuario', $id)->update(['institucion'  => $institucion]); }
    	if($estado != ''){ $pblcc2 = DB::table('usuario')->where('idusuario', $id)->update(['estado'  => $estado]); }


    	return redirect('configuracion');
    }



}
