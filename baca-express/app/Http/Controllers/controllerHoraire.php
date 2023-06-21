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

        //dd($request);

        $statusVoyage = $request->AllerRetour;
        $villeDestination = $request->SelectNameVilleDestination;;
        $dateRetour = $request->InputNameDateRetour;
        
        // recuperation du pays de depart dans la db via le l'id 
        $IdpaysDepart = $request->SelectNamePaysdepart;
        $paysDep = pays::where('id',$IdpaysDepart)->get();
        // recuperation du pays de destination dans la db via le l'id
        $IdpaysDestination = $request->SelectNamePaysDestination;
        $paysDest = pays::where('id',$IdpaysDestination)->get();
        // les horaires en fonction des villes et de la date de depart 
        $villeDepart = $request->SelectNameVilleDepart;
        $dateDepart = $request->InputNameDateDepart;
        $villes = ville::where('nom',$villeDepart)->with([
            'horaire' => function($q)use($dateDepart){
                $q->where('dateDepart','>=',$dateDepart)->orderBy('dateDepart','asc');
            }
        ])->get();
        // Le nombre de reservation et prix des billes 
        $nombreDeReservation = $request -> nombreReservation;
        $prix = $nombreDeReservation * 25000;
        // le prix en ligne 
        $prixLigne = $nombreDeReservation * 25000 - 2500;


        return view('InfoHoraire.Horaire', compact('statusVoyage','villeDepart','villeDestination','paysDep','paysDest','villes','nombreDeReservation','prix','prixLigne'));
    }
}
