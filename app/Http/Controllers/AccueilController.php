<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use App\Models\Gestion;
use App\Models\Appareil;
use App\Models\TypePiece;
use App\Models\Appartement;
use App\Models\TypeAppareil;
use Illuminate\Http\Request;

class AccueilController {
    public function welcome(){
        return view('welcome');
    }
    
    public function accueil(Request $request){
        $user = $request->user();
        $pivot = $user->immeubles[0]->pivot;
        //affichage des biens
        return view('accueil', compact(['user', 'pivot']));
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

    public function simulations(Request $request){
        $piece = array();
        $pieces = array(); // toutes les pièces de chacun des appartements du user
        $appartement = $request->user()->appartements;
        if($appartement != null){
            foreach($appartement as $app){
                $tmp = $app->pieces;
                if($tmp->count() > 0 ){
                    foreach($tmp as $t){
                        array_push($piece, $t);
                    }
                    array_push($pieces, $piece);
                }
            }
        }
        $appareil = array();
        $appareils = array();
        foreach($pieces as $ap){
            foreach ($ap as $piecee) {
                $tmp = $piecee->appareils;
                if($tmp->count() > 0){
                    foreach($tmp as $t){
                        array_push($appareil, $t);
                    }
                    array_push($appareils, $appareil);
                }
            }
        }
        return view('simulations', compact('appareils'));
    }

    public function storeSimulation(Request $request){
        dd($request->nom);
        
        dd('gestion créé');
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

    public function ajoutAppareil(Request $request){
        $piece = array();
        $pieces = array(); // toutes les pièces de chacun des appartements du user
        $appartement = $request->user()->appartements;
        if($appartement != null){
            foreach($appartement as $app){
                $tmp = $app->pieces;
                if($tmp->count() > 0 ){
                    array_push($pieces, $tmp);
                }
            }
        }
        $typeAppareil = TypeAppareil::all();
        return view('ajoutAppareil', compact('pieces', 'typeAppareil'));
    }

    public function storeAppareil(Request $request){
        dd($request);
        Appareil::create([

        ]);
        dd('appareil créé');
    }

    public function ajoutPiece(Request $request){
        //liste de tous ses appartements
        $appartement = $request->user()->appartements;
        //immeuble pour chaque appart
        $typePiece = TypePiece::all();
        return view('ajoutPiece', compact('appartement', 'typePiece'));
    }

    public function storePiece(Request $request){
        dd($request);
        Piece::create([

        ]);
        dd('piece créé');
    }

    public function biens(Request $request){
        $appartement = $request->user()->appartements;
        $immeuble = null;
        if($request->user()->proprietaire == 1){
            $immeuble = $request->user()->immeubles;
        }
        return view('biens', compact('appartement', 'immeuble'));
    }

    public function consultAppareil(){
        return view('consultAppareil');
    }

    public function consultConsoAppareil(){
        //récupérer les gestions pour chaque appareil 
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

    public function welcome(){
        return view('welcome');
    }

}