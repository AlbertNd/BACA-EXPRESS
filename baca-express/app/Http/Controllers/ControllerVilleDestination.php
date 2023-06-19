<?php

namespace App\Http\Controllers;

use App\Models\ville;
use Illuminate\Http\Request;

class ControllerVilleDestination extends Controller
{
    
    public function listeVIlleDestination()
    {   
        $villeDestinnation = ville::whereHas('pays', function($q){
            $q->whereId(request()->input('IdpaysDestination'));
        })-> pluck('nom','id');
        return response()->json($villeDestinnation);
    }
}
