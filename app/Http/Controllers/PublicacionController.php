<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Image;
use View;
use File;


class PublicacionController extends Controller
{
    

  public function index()
  {
    $gruposhow = DB::table('grupodetalle')->join('grupo', 'grupodetalle.idgrupo', '=', 'grupo.idgrupo')->where('grupodetalle.idusuario', Auth::user()->idusuario)->get();
    $publicacion[]=array();
    $idsgruposquesigueelusuario = DB::table('grupodetalle')->WHERE('idusuario', Auth::user()->idusuario)->get();
    $tam = DB::table('grupodetalle')->WHERE('idusuario', Auth::user()->idusuario)->count();
    for ($i=0; $i < $tam; $i++) 
    { 
      $publicacion[$i] = DB::table('publicacion')->WHERE('padre', $idsgruposquesigueelusuario[$i]->idgrupo)->orderBy('idpublicacion', 'DESC')->get();
    }
    return View::make('home',array("publicacion" => $publicacion,"gruposhow" => $gruposhow,));
  }


  protected function random_string()
  {
    $key = '';
    $keys = array_merge( range('a','z'), range(0,9) );
    for($i=0; $i<10; $i++)
    {
      $key .= $keys[array_rand($keys)];
    }
    return $key;
  }


  public function post(Request $request)
  {
    $omnns='';   
    if($request->hasfile('archiovs'))
    {      
      foreach($request->file('archiovs') as $imagenOriginal2)
      {
        $name=$imagenOriginal2->getClientOriginalName();
        if ($imagenOriginal2->getClientOriginalExtension() == "jpg" || $imagenOriginal2->getClientOriginalExtension() == "png" || $imagenOriginal2->getClientOriginalExtension() == "gif" || $imagenOriginal2->getClientOriginalExtension() == "jpeg" || $imagenOriginal2->getClientOriginalExtension() == "doc" || $imagenOriginal2->getClientOriginalExtension() == "docx" || $imagenOriginal2->getClientOriginalExtension() == "xls" || $imagenOriginal2->getClientOriginalExtension() == "xlsx" || $imagenOriginal2->getClientOriginalExtension() == "pdf" || $imagenOriginal2->getClientOriginalExtension() == "ppt" ||  $imagenOriginal2->getClientOriginalExtension() == "ppsx" || $imagenOriginal2->getClientOriginalExtension() == "odt" )
        {
          $imagenOriginal2->move(public_path().'/images/imagesOrFilesPost/', $name); 
          $imagenOriginal2= new File();
          $omnns .= $name.',';
        }else{
              return redirect()->back->with('alert', 'Archivo no valido');
             }
      }
    }
    
    $efcha = date('Y-m-d H:i:s');
    $pblcn = DB::table('publicacion')->insert(array(
            'idpublicacion' => 0,
            'idusuario' => $request->input('idUsuaior'),
            'fecha' => $efcha,
            'sentimiento' => $request->input('comentario2'),
            'evaluacion' => $request->input('comentario3'), 
            'analisis' => $request->input('comentario4'),
            'conclusion' => $request->input('comentario5'),
            'planaccion' => $omnns,
            'titulo' => $request->input('titulo'),
            'observaciones' => $request->input('comentario'),
            'padre' => $request->input('grupo')
    ));

    return redirect()->action('PublicacionController@index');
  }


  public function eliminarp(Request $request)
  {

     $idaelimiar = $request->input('idpublicacionaeliminar');
     DB::table('publicacion')->where('idpublicacion', $idaelimiar)->delete();

    return redirect()->action('PublicacionController@index');

  }
    

    public function getSavePublicacion()
    {
      return view('home');
    }

}
