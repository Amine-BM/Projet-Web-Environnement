<?php

namespace App\Http\Controllers;

class SiteController {

    public function welcome(){
        return view("siteWelcome");
    }

    public function contact(){
        return view("contact");
    }
    public function connexion(){
        return view("layouts.connexion");

    }
    public function propos(){
        return view("propos");
    }

}
