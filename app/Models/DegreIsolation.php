<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DegreIsolation extends Model
{
    use HasFactory;
    protected $primaryKey = 'idDegreIsolation';

    protected $fillable = [
        'libelle'
    ];
    public function immeubles(){
       return $this->hasMany(Immeuble::class, 'refDegreIsolation', 'idDegreIsolation');
    }

}
