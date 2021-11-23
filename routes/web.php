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

Route::get('/acceuil', [AccueilController::class, 'welcolme'])->name('acceuil');

Route::get('/inscription', [ConnectController::class, 'inscription'])->name('inscription');

Route::get('/', [ConnectController::class, 'connexion'])->name('connect');

Route::get('/contact', [AccueilController::class, 'contact'])->name('contact');



