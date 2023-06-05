<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function FormulaireContact(){
        return view('PagesContact.formulaireContact');
    }
    public function RecupDataContact(Request $request){
        return ('en cours de traitement');
    }
}
