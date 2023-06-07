<?php

use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\Apropos;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/','/Home');

Route::get('/',[AcceuilController::class,'PageAceuil']);
Route::get('/Home',[AcceuilController::class,'PageAceuil'])->name('Home');

// Recuperation des request pour la page recherche
Route::post('/Home',[AcceuilController::class,'Recherche']);


Route::get('/Horaire',[AcceuilController::class,'Recherche'])->name('horaire');

// ####### Reservation #####
// Affichage du formulaire de reservation 
Route::get('/Reservation',[ReservationController::class,'AfficherReservation'])->name('reservation');
// Recuperation des request du choix des horaires 
Route::post('/Reservation',[ReservationController::class,'AfficherReservation']);

Route::get('/Apropos',[Apropos::class,'Apropos'])->name('apropos');

// contact

Route::get('/Contact',[ContactController::class,'FormulaireContact'])-> name('contact');
Route::post('/Contact',[ContactController::class,'RecupDataContact']);

//service 

Route::get('/Service',[ServiceController::class,'Service'])-> name('service');


