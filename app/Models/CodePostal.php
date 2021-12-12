<?php

namespace App\Models;

use App\Models\Ville;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CodePostal extends Model
{
    use HasFactory;
    protected $primaryKey = 'idCodePostal';

    public function ville(){
        return $this->belongsTo(Ville::class);
    }
}
