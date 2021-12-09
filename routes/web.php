<?php

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

Route::get('/inscription', [ConnectController::class, 'inscription'])->name('inscription');
Route::post('/inscription', [ConnectController::class, 'handleInscription'])->name('handleInscription');

// Route::get('/', [ConnectController::class, 'connexion'])->name('connect');
// Route::post('/', [ConnectController::class, 'handleConnexion'])->name('handleConnexion');


Route::get('/test', function() {return view('test');});


Route::get('/contact', [AccueilController::class, 'contact'])->name('contact');
Route::get('/maisons', [AccueilController::class, 'maisons'])->name('maisons');
Route::get('/appartements', [AccueilController::class, 'appartements'])->name('appartements');
Route::get('/etreplusvert', [AccueilController::class, 'etreplusvert'])->name('vert');
Route::get('/appareils', [AccueilController::class, 'appareils'])->name('appareils');
Route::get('/simulations', [AccueilController::class, 'simulations'])->name('simulations');
Route::get('/creaImmeuble', [AccueilController::class, 'creaImmeuble'])->name('creaImmeuble');
Route::get('/consultStatut', [AccueilController::class, 'consultStatut'])->name('consultStatut');
Route::get('/ajoutAppareil', [AccueilController::class, 'ajoutAppareil'])->name('ajoutAppareil');
Route::get('/ajoutPiece', [AccueilController::class, 'ajoutPiece'])->name('ajoutPiece');
Route::get('/biens', [AccueilController::class, 'biens'])->name('biens');
Route::get('/consultAppareil', [AccueilController::class, 'consultAppareil'])->name('consultAppareil');
Route::get('/consultConsoAppareil', [AccueilController::class, 'consultConsoAppareil'])->name('consultConsoAppareil');
Route::get('/consultConsoAppartement', [AccueilController::class, 'consultConsoAppartement'])->name('consultConsoAppartement');
Route::get('/consultConsoImmeuble', [AccueilController::class, 'consultConsoImmeuble'])->name('consultConsoImmeuble');
Route::get('/creaAppartement', [AccueilController::class, 'creaAppartement'])->name('creaAppartement');
Route::get('/creaImmeuble', [AccueilController::class, 'creaImmeuble'])->name('creaImmeuble');
Route::get('/profil', [AccueilController::class, 'profil'])->name('profil');
Route::get('/simulation', [AccueilController::class, 'simulation'])->name('simulation');
Route::get('/ajoutContrat', [AccueilController::class, 'ajoutContrat'])->name('ajoutContrat');
Route::get('/suppContrat', [AccueilController::class, 'suppContrat'])->name('suppContrat');
Route::get('/suppImmeuble', [AccueilController::class, 'suppImmeuble'])->name('suppImmeuble');
Route::get('/suppAppartement', [AccueilController::class, 'suppAppartement'])->name('suppAppartement');
Route::get('/suppPiece', [AccueilController::class, 'suppPiece'])->name('suppPiece');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
