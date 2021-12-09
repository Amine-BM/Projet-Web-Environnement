<?php

namespace App\Models;

use App\Models\Appareil;
use App\Models\Ressource;
use App\Models\Substance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeAppareil extends Model
{
    use HasFactory;

    public function ressources(){
        return $this->belongsToMany(Ressource::class, 'ressource_typeappareil', 'refTypeAppareil', 'refRessource');
    }
    public function substances(){
        return $this->belongsToMany(Substance::class, 'substance_typeappareil', 'refTypeAppareil', 'refSubstance');
    }

    public function appareils(){
        return $this->hasMany(Appareil::class, 'refTypeAppareil', 'idTypeAppareil');
    }
}
