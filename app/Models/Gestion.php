<?php

namespace App\Models;

use App\Models\Appareil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gestion extends Model
{
    use HasFactory;
    protected $primaryKey = 'idGestion';

    protected $fillable = [
        'heureDebut',
        'heureFin',
        'refAppareil',
    ];
    public function appareil(){
        return $this->belongsTo(Appareil::class);
    }
}
