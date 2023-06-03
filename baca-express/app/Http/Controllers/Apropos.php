<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Apropos extends Controller
{
    public function Apropos(){
        return view('PagesApropos.Apropos');
    }
}
