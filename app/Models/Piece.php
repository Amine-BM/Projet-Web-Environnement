<?php

namespace App\Models;

use App\Models\TypePiece;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Piece extends Model
{
    use HasFactory;

    public function typePiece(){
        return $this->belongsTo(TypePiece::class);
    }
}
