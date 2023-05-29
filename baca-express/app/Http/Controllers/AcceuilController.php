<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    Public function BasePageAcceuil(){
        return view('Home');
    }
    
    public function PageAceuil(){
        return view('PagesAcceuil.pagesAcceuil');
    }
}
