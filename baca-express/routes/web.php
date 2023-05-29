<?php

use App\Http\Controllers\AcceuilController;
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

Route::get('/',[AcceuilController::class,'PageAceuil'])->name('Home');
Route::get('/Home',[AcceuilController::class,'PageAceuil'])->name('Home');
