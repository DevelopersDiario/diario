<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use View;

class PublicacionController extends Controller
{
    public function index()
    {
        $publicacion[]=array();
        $idsgruposquesigueelusuario = DB::table('grupodetalle')->WHERE('idusuario', Auth::user()->idusuario)->get();
        $tam = DB::table('grupodetalle')->WHERE('idusuario', Auth::user()->idusuario)->count();
        $gruposhow = DB::table('grupo')->WHERE('usuarioalumno', Auth::user()->idusuario)->orderByRaw('idgrupo DESC')->get();
        for ($i=0; $i < $tam; $i++) 
        { 
            $publicacion[$i] = DB::table('publicacion')->WHERE('idusuario', Auth::user()->idusuario)->WHERE('padre', $idsgruposquesigueelusuario[$i]->idgrupo)->get();  
        }
        return View::make('home',array("publicacion" => $publicacion,"gruposhow" => $gruposhow,));
    }

    public function post(Request $request)
    {
        $efcha = date('Y-m-d H:i:s');
        $pblcn = DB::table('publicacion')->insert(array(
            'idpublicacion' => 0,
            'idusuario' => $request->input('idUsuaior'),
            'fecha' => $efcha,
            'sentimiento' => '',
            'evaluacion' => '' ,
            'analisis' => '',
            'conclusion' => '',
            'planaccion' => '',
            'titulo' => $request->input('titulo'),
            'observaciones' => $request->input('comentario'),
            'padre' => $request->input('grupo')
        ));
        return redirect()->action('PublicacionController@index');
    }

    public function getSavePublicacion()
    {
        return view('home');
    }

}
