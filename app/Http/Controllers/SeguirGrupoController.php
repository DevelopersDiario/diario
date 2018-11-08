<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class SeguirGrupoController extends Controller
{
    public function seguirGrupo(Request $request)
    {
    	$validate = DB::table('grupodetalle')->WHERE('idgrupo',$request->input('grupoSeguir'))->WHERE('idusuario', Auth::user()->idusuario)->count();

    	if ($validate==0) {
    		$pblcn = DB::table('grupodetalle')->insert(array(
    	    'idgrupodetalle' => 0,
    	    'idgrupo' => $request->input('grupoSeguir'),
    	    'idusuario' => Auth::user()->idusuario
    	));

    		// return redirect('grupos')->withSuccess('Ahora sigues a ese grupo!');;
        flash('Ahora sigues a ese grupo!');
    		return redirect("grupos-view/?_token=RNJdonjR1G7IgB9gal9B6SlvM2vO0S83HvHABVAb&idgrupo=".$request->input('grupoSeguir'));
    	}else{
    		// return redirect('grupos')->withSuccess('Ya sigues a ese grupo!');;
        flash('Ya sigues a ese grupo!');
    		return redirect("grupos-view/?_token=RNJdonjR1G7IgB9gal9B6SlvM2vO0S83HvHABVAb&idgrupo=".$request->input('grupoSeguir'));
    	}
    }


    public function dejarSeguirGrupo(Request $request)
    {

    DB::table('grupodetalle')->WHERE('idusuario', Auth::user()->idusuario)->WHERE('idgrupo', $request->input('grupoSeguir'))->delete();
    return redirect("grupos-view/?_token=RNJdonjR1G7IgB9gal9B6SlvM2vO0S83HvHABVAb&idgrupo=".$request->input('grupoSeguir'));
    }






}
