<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use View;


class GruposViewsController extends Controller
{
    //
    //public $querty =[];

    public function index(Request $request)
    {
        $idgpo = $request->input('idgrupo');

        $pb = DB::table('publicacion')->WHERE('padre', $idgpo)->orderBy('idpublicacion', 'DESC')->get();
        
        $pb22 = DB::table('grupo')->WHERE('idgrupo', $idgpo)->get();

        $pb33 = DB::table('grupodetalle')->WHERE('idgrupo', $idgpo)->WHERE('idusuario', Auth::user()->idusuario)->count();

        $pb44 = DB::table('publicacion')->WHERE('padre', $idgpo)->orderBy('idpublicacion', 'DESC')->count();
    
        return View::make('grupos-view',array("pb" => $pb, "pb22" => $pb22, "pb33" => $pb33, "pb44" => $pb44,));
       
/*       $publicacion[]=array();

        $idsgruposquesigueelusuario = DB::table('grupodetalle')->WHERE('idusuario', Auth::user()->idusuario)->get();
        $tam = DB::table('grupodetalle')->WHERE('idusuario', Auth::user()->idusuario)->count();
*/
        //$tam = count($idsgruposquesigueelusuario);

       // foreach ($idsgruposquesigueelusuario as $qwertybhnjmac22) {

            
        //}

        /*
                for(int i = 0; i < 5; i++){
                       arrayC[i] = arrayA[i];
                       arrayC[i+5] = arrayB[i];
                   }



               vista    
    @foreach ($publicacion as $pb)
        <p class="text-dar"> {{ var_dump($pb->titulo)}} </p>
    @endforeach

        */

/*        for ($i=0; $i < $tam; $i++) { 
            //echo $idsgruposquesigueelusuario[$i]->idgrupo."<br>";
                $publicacion[$i] = DB::table('publicacion')->WHERE('idusuario', Auth::user()->idusuario)->WHERE('padre', $idsgruposquesigueelusuario[$i]->idgrupo)->get();
        }
*/
        
       /* for ($i=0; $i < count($publicacion) ; $i++) { 
            for ($j=0; $j < count($publicacion); $j++) { 
                echo $publicacion[$j]->titulo;
            }
            
        }*/



/*            return View::make('grupos-view',array("publicacion" => $publicacion,));
*/
        
       


        //return View::make('grupos-view',array("idsgruposquesigueelusuario" => $idsgruposquesigueelusuario,));
//        return View::make('grupos-view',array("publicacion" => $publicacion,));
        
    }


    public function verficarGrupoSeguir(Request $request)
    {

    }
}
