<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectController {
    public function connexion(){
        return view('connexion.connect');
    }

    public function inscription(){
        return view('connexion.inscription');
    }

    public function handleConnexion(Request $request){
        $user = [
            'name' => $request->username,
            'mdp' => $request->password
        ];
        dd($user);
    }

    public function handleInscription(Request $request){
        $user = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'login' => $request->login,
            'email' => $request->email,
            'password' => $request->password,
            'age' => $request->age,
            'tel' => $request->tel,
            'locataire' => $request->locataire,
            'proprietaire' => $request->proprietaire,
        ];
        dd($user);
    }
}