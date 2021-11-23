<?php

namespace App\Http\Controllers;

class ConnectController {
    public function connexion(){
        return view('connexion.connect');
    }

    public function inscription(){
        return view('connexion.inscription');
    }

    // public function contact(){
    //     return view('contact');
    // }
}