<?php

namespace App\Models;

use App\Models\Ville;
use App\Models\Region;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;

    public function villes(){
        return $this->hasMany(Ville::class, 'refDepartement', 'idDepartement');
    }

    public function region(){
        return $this->belongsTo(Region::class);
    }
}
