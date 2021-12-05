<?php

namespace App\Models;

use App\Models\Appartement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DegreSecurite extends Model
{
    use HasFactory;

    public function appartements(){
        return $this->hasMany(Appartement::class, 'refDegreSecurite', 'idDegreSecurite');
    }
}
