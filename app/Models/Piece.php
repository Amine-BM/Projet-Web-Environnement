<?php

namespace App\Models;

use App\Models\Appareil;
use App\Models\TypePiece;
use App\Models\Appartement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Piece extends Model
{
    use HasFactory;
    protected $primaryKey = 'idPiece';
    public $timestamps = false;
    protected $fillable = [
        'libelle',
        'refAppartement',
        'refTypePiece',
    ];
    
    public function typePiece(){
        return $this->belongsTo(TypePiece::class);
    }

    public function appartement(){
        return $this->belongsTo(Appartement::class);
    }

    public function appareils(){
        return $this->hasMany(Appareil::class, 'refPiece', 'idPiece');
    }
}
