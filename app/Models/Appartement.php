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

    protected $primaryKey = 'idAppartement';

    protected $fillable = [
        'surface',
        'nombrePiece',
        'numeroBoite',
        'refImmeuble',
        'refTypeAppartement',
        'RefDegreSecurite',
    ];

    public function typeAppartement(){
        return $this->belongsTo(TypeAppartement::class);
    }

    public function pieces(){
        return $this->hasMany(Piece::class, 'refAppartement', 'idAppartement');
    }

    public function immeuble(){
        return $this->belongsTo(Immeuble::class);
    }

    public function degreSecurite(){
        return $this->belongsTo(DegreSecurite::class);
    }

    public function users(){
        return $this->belongsToMany(Appartement::class, 'user_appartement', 'refAppartement', 'refUtilisateur')->withPivot('dateDebut', 'dateFin', 'nombreHabitant');
    }

    /**
     * The roles that belong to the Appartement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
}
