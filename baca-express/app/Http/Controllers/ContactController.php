<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function FormulaireContact(){
        return view('PagesContact.formulaireContact');
    }
}
