<?php

namespace App\Http\Controllers;



use App\Models\ville;


class ControllerFormulaireReserveBillet extends Controller
{
    public function listeVille()
    {   
        $ville = ville::whereHas('pays', function($q){
            $q->whereId(request()->input('AjaxIdPays',0));
        })-> pluck('nom','id');
        return response()->json($ville);
    }

   
}
