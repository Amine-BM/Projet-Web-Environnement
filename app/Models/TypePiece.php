<?php

namespace App\Models;

use App\Models\Piece;
use App\Models\TypeAppartement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypePiece extends Model
{
    use HasFactory;

    public function pieces(){
        return $this->hasMany(Piece::class, 'refTypePiece', 'idTypePiece');
    }

    public function typeAppartement(){
        return $this->belongsToMany(TypeAppartement::class, 'typeappartement_typepiece', 'refTypePiece', 'refTypeAppartement');
    }
}
