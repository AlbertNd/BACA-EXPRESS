<?php

use App\Models\Horaire;
use App\Http\Controllers\Apropos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\controllerHoraire;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ControllerVilleDepart;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ControllerVilleDestination;
use App\Http\Controllers\ControllerFormulaireReserveBillet;

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
// Insertion des villes de destination 
Route::post('VilesDestination',[ControllerVilleDestination::class,'listeVIlleDestination'])->name('RoutelisteVilleDestination');

/*
| Les horaire 
*/
// Recapitulation des information de voyage et liste de prochainne depart et retour
Route::post('/Horaire',[controllerHoraire::class,'Recherche'])->name('horaire');



// Recuperation des request pour la page recherche
//Route::post('/Home',[AcceuilController::class,'Recherche']);



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


