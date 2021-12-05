<?php

namespace App\Models;

use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ville extends Model
{
    use HasFactory;

    public function code_postaux(){
        return $this->hasMany(CodePostal::class, 'refVille', 'idVille');
    }

    public function immeubles(){
        return $this->hasMany(Immeuble::class, 'refVille', 'idVille');
    }

    public function departement(){
        return $this->belongsTo(Departement::class);
    }


}
