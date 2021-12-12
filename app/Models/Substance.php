<?php

namespace App\Models;

use App\Models\TypeAppareil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Substance extends Model
{
    use HasFactory;
    protected $primaryKey = 'idSubstance';

    protected $fillable = [
        'type',
        'valeurMin',
        'valeurMax',
        'description',
        'valeurCritique',
        'valeurIdeale',
    ];
    public function type_appareils(){
        return $this->belongsToMany(TypeAppareil::class, 'substance_typeappareil', 'refSubstance', 'refTypeAppareil');
    }
}
