<?php

namespace App\Models;

use App\Models\Immeuble;
use App\Models\DegreSecurite;
use App\Models\TypeAppartement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appartement extends Model
{
    use HasFactory;

    public function typeAppartement(){
        return $this->belongsTo(TypeAppartement::class);
    }

    public function immeuble(){
        return $this->belongsTo(Immeuble::class);
    }

    public function degreSecurite(){
        return $this->belongsTo(DegreSecurite::class);
    }

    public function users(){
        return $this->belongsToMany(Appartement::class, 'user_appartement', 'refAppartement', 'refUtilisateur');
    }
}
