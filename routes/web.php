<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ConnectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AccueilController::class, 'welcome'])->name('welcome');
Route::get('/accueil', [AccueilController::class, 'accueil'])->name('accueil');


Route::get('/contact', [AccueilController::class, 'contact'])->name('contact');
Route::get('/maisons', [AccueilController::class, 'maisons'])->name('maisons');
Route::get('/appartements', [AccueilController::class, 'appartements'])->name('appartements');
Route::get('/etreplusvert', [AccueilController::class, 'etreplusvert'])->name('vert');
Route::get('/appareils', [AccueilController::class, 'appareils'])->name('appareils');

Route::get('/simulations', [AccueilController::class, 'simulations'])->name('simulations');
Route::post('/simulations', [AccueilController::class, 'storeSimulation'])->name('storeSimulation');

Route::get('/creaImmeuble', [AccueilController::class, 'creaImmeuble'])->name('creaImmeuble');
Route::get('/consultStatut', [AccueilController::class, 'consultStatut'])->name('consultStatut');

Route::get('/ajoutAppareil', [AccueilController::class, 'ajoutAppareil'])->name('ajoutAppareil');
Route::post('/ajoutAppareil', [AccueilController::class, 'storeAppareil'])->name('storeAppareil');

Route::get('/ajoutPiece', [AccueilController::class, 'ajoutPiece'])->name('ajoutPiece');
Route::post('/ajoutPiece', [AccueilController::class, 'storePiece'])->name('storePiece');

Route::get('/biens', [AccueilController::class, 'biens'])->name('biens');
Route::get('/consultAppareil', [AccueilController::class, 'consultAppareil'])->name('consultAppareil');
Route::get('/consultConsoAppareil', [AccueilController::class, 'consultConsoAppareil'])->name('consultConsoAppareil');
Route::get('/consultConsoAppartement', [AccueilController::class, 'consultConsoAppartement'])->name('consultConsoAppartement');
Route::get('/consultConsoImmeuble', [AccueilController::class, 'consultConsoImmeuble'])->name('consultConsoImmeuble');
Route::get('/creaAppartement', [AccueilController::class, 'creaAppartement'])->name('creaAppartement');
Route::get('/creaImmeuble', [AccueilController::class, 'creaImmeuble'])->name('creaImmeuble');
Route::get('/profil', [AccueilController::class, 'profil'])->name('profil');

Route::get('/ajoutContrat', [AccueilController::class, 'ajoutContrat'])->name('ajoutContrat');
Route::get('/suppContrat', [AccueilController::class, 'suppContrat'])->name('suppContrat');
Route::get('/suppImmeuble', [AccueilController::class, 'suppImmeuble'])->name('suppImmeuble');
Route::get('/suppAppartement', [AccueilController::class, 'suppAppartement'])->name('suppAppartement');
Route::get('/suppPiece', [AccueilController::class, 'suppPiece'])->name('suppPiece');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function (Request $request) {
    $user = $request->user();
    return view('dashboard');
})->name('dashboard');
