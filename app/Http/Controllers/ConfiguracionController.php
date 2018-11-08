<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use View;

class ConfiguracionController extends Controller
{

    public function index()
    {
		$infoshow = DB::table('usuario')->where('idusuario', Auth::user()->idusuario)->get();
		$grupos = DB::table('grupo')->get();


		return \View::make('configuracion',array("infoshow" => $infoshow, "grupos" => $grupos));

		/*return view('home', array(
		"publicacion" => $publicacion
		));*/
//         return view('configuracion');
    }






}
