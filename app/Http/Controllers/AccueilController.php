<?php

namespace App\Http\Controllers;

class AccueilController {
    public function welcome(){
        return view('welcome');
    }
    
    public function accueil(){
        return view('accueil');
    }

    public function connexion(){
        return view('layouts.connexion');
    }

    public function contact(){
        return view('contact');
    }

    public function maisons(){
        return view('maisons.maisons');
    }

    public function appartements(){
        return view('appartements.appartements');
    }

    public function etreplusvert(){
        return view('etreplusvert');
    }

    public function deconnexion(){
        return view('connexion');
    }

    public function appareils(){
        return view('appareils');
    }

    public function simulations(){
        return view('simulations');
    }

    public function creaImmeuble(){
        return view('creaImmeuble');
    }

    public function consultStatut(){
        return view('consultStatut');
    }

    public function profil(){
        return view('profil');
    }

    public function ajoutAppareil(){
        return view('ajoutAppareil');
    }

    public function ajoutPiece(){
        return view('ajoutPiece');
    }

    public function biens(){
        return view('biens');
    }

    public function consultAppareil(){
        return view('consultAppareil');
    }

    public function consultConsoAppareil(){
        return view('consultConsoAppareil');
    }

    public function consultConsoAppartement(){
        return view('consultConsoAppartement');
    }

    public function consultConsoImmeuble(){
        return view('consultConsoImmeuble');
    }

    public function creaAppartement(){
        return view('creaAppartement');
    }

    public function ajoutContrat(){
        return view('ajoutContrat');
    }

    public function suppContrat(){
        return view('suppContrat');
    }

    public function suppImmeuble(){
        return view('suppImmeuble');
    }

    public function suppAppartement(){
        return view('suppAppartement');
    }

    public function suppPiece(){
        return view('suppPiece');
    }



}