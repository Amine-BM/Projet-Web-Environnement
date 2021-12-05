<?php

namespace App\Models;

use App\Models\User;
use App\Models\Ville;
use App\Models\DegreIsolation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Immeuble extends Model
{
    use HasFactory;

    public function ville(){
        return $this->belongsTo(Ville::class);
    }

    public function degre_isolation(){
        return $this->belongsTo(DegreIsolation::class);
    }

    public function appartements(){
        return $this->hasMany(Appartement::class, 'refImmeuble', 'idImmeuble');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'user_immeuble', 'refImmeuble', 'refUtilisateur');
    }
}
