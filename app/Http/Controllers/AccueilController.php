<?php

namespace App\Http\Controllers;

class AccueilController {
    public function welcolme(){
        return view('acceuil');
    }

    public function connexion(){
        return view('layouts.connexion');
    }

    public function contact(){
        return view('contact');
    }
}