<?php

namespace App\Http\Controllers;

class AccueilController {
    public function welcolme(){
        return view('welcome');
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


}