<?php

namespace App\Http\Controllers;

use App\Models\pays;
use App\Models\ville;
use Illuminate\Http\Request;

class ControllerVilleDepart extends Controller
{
    public function listePaysDestination(){
        $pays = pays::whereDoesntHave('ville',function($q){
            $q->where('nom',request()->input('idVille'));
        })->pluck('nom','id');
        
        return response()->json($pays);
    }
}
