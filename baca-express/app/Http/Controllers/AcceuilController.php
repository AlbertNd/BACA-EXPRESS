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
        /* 
        | Section du formaire de reserve : 
        |  => Le formulaire de reserve est include dans la page d'acceuille. (donc pas de route spécifique et donc pas de fonction pour la retourne)     
        */
        // La liste des pays dans le formulaire
        $pays = pays::all();
        return view('PagesAcceuil.pagesAcceuil',['pays' => $pays]);
    }

}
