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

Route::get('/accueil', [AccueilController::class, 'welcolme'])->name('accueil');

Route::get('/inscription', [ConnectController::class, 'inscription'])->name('inscription');
Route::post('/inscription', [ConnectController::class, 'handleInscription'])->name('handleInscription');

Route::get('/', [ConnectController::class, 'connexion'])->name('connect');
Route::post('/', [ConnectController::class, 'handleConnexion'])->name('handleConnexion');

Route::get('/contact', [AccueilController::class, 'contact'])->name('contact');

Route::get('/maisons', [AccueilController::class, 'maisons'])->name('maisons');

Route::get('/appartements', [AccueilController::class, 'appartements'])->name('appartements');

Route::get('/etreplusvert', [AccueilController::class, 'etreplusvert'])->name('vert');





