<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests;

use Image;


class CoverController extends Controller
{
    //

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


    public function changeCover(Request $requeste)
    {
    	//usuauiroi
    	$idUsuario2 = $requeste->input('idUsuariodos');


      // ruta de las imagenes guardadas
      $ruta2 = public_path().'/images/coverPictures/';

      // recogida del form
      $imagenOriginal2 = $requeste->file('ArchivoCover');


      // crear instancia de imagen
      $imagen2 = Image::make($imagenOriginal2);

      // generar un nombre aleatorio para la imagen
      $temp_name2 = $this->random_string() . '.' . $imagenOriginal2->getClientOriginalExtension();

      if ($imagen2->save($ruta2 . $temp_name2, 100)) {
      	DB::table('usuario')->where('idusuario', $idUsuario2)->update(['coverPicture' => "images/coverPictures/".$temp_name2]);
      	return redirect('/home');
      }



    }

}
