<?php

use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\Apropos;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ControllerFormulaireReserveBillet;
use App\Http\Controllers\ControllerVilleDepart;
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

/*
| ##########  Page acceuille ########## 
*/

// Affichage de la page acceuille 
Route::redirect('/','/Home');
Route::get('/',[AcceuilController::class,'PageAceuil']);
Route::get('/Home',[AcceuilController::class,'PageAceuil'])->name('HomeAcceuille');
// Insertion des villes dans le formaulaire 
Route::post('Villes',[ControllerFormulaireReserveBillet::class,'listeVille'])->name('RoutelisteVille');
// Insertion des pays de destination dans le formaulaire
Route::post('Pays',[ControllerVilleDepart::class,'listePaysDestination'])->name('RoutelistePaysDestination');





// Recuperation des request pour la page recherche
//Route::post('/Home',[AcceuilController::class,'Recherche']);


Route::get('/Horaire',[AcceuilController::class,'Recherche'])->name('horaire');

// ####### Reservation #####
// Recuperation des request du choix des horaires 
//Route::post('/Reservation',[ReservationController::class,'AfficherReservation'])->name('postreservation');
// Affichage du formulaire de reservation 
Route::get('/Reservation',[ReservationController::class,'AfficherReservation'])->name('reservation');

Route::get('/Apropos',[Apropos::class,'Apropos'])->name('apropos');

// contact

Route::get('/Contact',[ContactController::class,'FormulaireContact'])-> name('contact');
//Route::post('/Contact',[ContactController::class,'RecupDataContact']);

//service 

Route::get('/Service',[ServiceController::class,'Service'])-> name('service');


