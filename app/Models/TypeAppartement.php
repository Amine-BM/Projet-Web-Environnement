<?php

namespace App\Models;

use App\Models\TypePiece;
use App\Models\Appartement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeAppartement extends Model
{
    use HasFactory;

    public function appartements(){
        return $this->hasMany(Appartement::class, 'refTypeAppartement', 'idTypeAppartement');
    }

    public function typePieces(){
        return $this->belongsToMany(TypePiece::class, 'typeappartement_typepiece', 'refTypeAppartement', 'refTypePiece');
    }
}
