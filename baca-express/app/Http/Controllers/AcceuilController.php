<?php

namespace App\Http\Controllers;

use App\Models\Horaire;
use App\Models\pays;
use App\Models\ville;
use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    public function BasePageAcceuil()
    {
        return view('Home');
    }
    public function PageAceuil()
    {

        return view('PagesAcceuil.pagesAcceuil', [
            'villeDepart' => ville::select('id', 'nom')->where('pays_id', '=', 1)->get(),
            'villeArrive'  => ville::select('id', 'nom')->where('pays_id', '=', 2)->get()
        ]);
    }

    //la partie opérationnel du formulaire de recherche pour les horaire et les reservations 

    public function Recherche(Request $request)
    {

        $villeDeDepart = $request->depart;
        $nombre = $request -> passagers;
        $destination = $request -> destination;
        $depart = $request -> depart;
        $PaysDepart =ville::select('pays_id')->where('nom',$villeDeDepart)->get();
        $IdPaysDepart = $PaysDepart[0]-> pays_id;
        $DateUtilisateur = $request -> dateDepart;
        //$IdVilDateSupDateUti = Horaire::select('dateDepart')->where('dateDepart','>',$DateUtilisateur)->get();
        
        
        //dd($IdVilDateSupDateUti);

        return view('InfoHoraire.Horaire', [
            'pays' => pays::with([
                'ville' => function ($q) use ($villeDeDepart) {
                    $q->where('nom', $villeDeDepart);
                },
            ])->where('id',$IdPaysDepart)->get(),
            
            'villest' => ville::with(['horaire' => function($p) use($DateUtilisateur){
                $p->where('dateDepart','>=',$DateUtilisateur);
            }])->where('nom',$villeDeDepart)->get(),
            


            'villeDepart' => ville::select('id', 'nom')->where('pays_id', '=', 1)->get(),
            'villeArrive'  => ville::select('id', 'nom')->where('pays_id', '=', 2)->get(),
            'prix' => $nombre * 5,
            'destination' => $destination,
            'depart' => $depart,
            'DateAujourduit' => date('Y-m-d')
        ]);
    }
}
