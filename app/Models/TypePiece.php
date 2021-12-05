<?php

namespace App\Models;

use App\Models\Piece;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypePiece extends Model
{
    use HasFactory;

    public function pieces(){
        return $this->hasMany(Piece::class, 'refTypePiece', 'idTypePiece');
    }
}
