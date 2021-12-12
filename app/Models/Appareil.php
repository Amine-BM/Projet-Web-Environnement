<?php

namespace App\Models;

use App\Models\Piece;
use App\Models\Video;
use App\Models\Gestion;
use App\Models\TypeAppareil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appareil extends Model
{
    use HasFactory;

    protected $primaryKey = 'idAppareil';

    protected $fillable = [
        'libelle',
        'consommationHeure',
        'emissionHeure',
        'emplacement',
        'refPiece',
        'refTypeAppareil',
    ];

    public function typeAppareil(){
        return $this->belongsTo(TypeAppareil::class);
    }

    public function piece(){
        return $this->belongsTo(Piece::class);
    }

    public function videos(){
        return $this->hasMany(Video::class, 'refAppareil', 'idAppareil');
    }

    public function gestions(){
        return $this->hasMany(Gestion::class, 'refAppareil', 'idAppareil');
    }
}
