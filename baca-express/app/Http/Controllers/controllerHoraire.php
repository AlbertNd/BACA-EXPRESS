<?php

namespace App\Http\Controllers;

use App\Models\pays;
use App\Models\Horaire;
use App\Models\ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllerHoraire extends Controller
{
    public function Recherche(Request $request)
    {

       // dd($request);

        $statusVoyage = $request->AllerRetour;
        $villeDestination = $request->SelectNameVilleDestination;;
        $dateDepart = $request->InputNameDateDepart;
        $dateRetour = $request->InputNameDateRetour;
        
        // recuperation du pays de depart dans la db via le l'id 
        $IdpaysDepart = $request->SelectNamePaysdepart;
        $paysDep = pays::where('id',$IdpaysDepart)->get();
        // recuperation du pays de destination dans la db via le l'id
        $IdpaysDestination = $request->SelectNamePaysDestination;
        $paysDest = pays::where('id',$IdpaysDestination)->get();
        // les horaires en fonction des villes 
        $villeDepart = $request->SelectNameVilleDepart;
        $villes = ville::with('Horaire')->get();


        return view('InfoHoraire.Horaire', compact('statusVoyage','villeDepart','villeDestination','paysDep','paysDest','villes'));
    }
}
