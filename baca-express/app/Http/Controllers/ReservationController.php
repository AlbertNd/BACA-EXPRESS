<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function AfficherReservation(){
        return view('PagesReservation.Reservation');
    }
}
