<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function AfficherReservation(Request $request)

    {
         //dd($request);

        return view('PagesReservation.Reservation', [
            'paysDepart' => $request->paysDepartHoraire,
            'villeDepart' => $request->villeDepartHoraire,
            'nombreBillet' => $request->nombreBilletDepartHorraire,
            'villeDestination' => $request-> villeDestinationHoraire,
            'dateDepart' => $request->dateDepartHoraire,
            'heureDepart' => $request -> heureDepartHoraire,
            'prixAchat' => $request -> prixDepartHorraire 
        ]);
    }
}
