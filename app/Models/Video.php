<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $primaryKey = 'idVideo';

    protected $fillable = [
        'vue',
        'likes',
        'dislikes',
        'commentaire',
        'refAppareil',
    ];
    public function appareil(){
        return $this->belongsTo(Appareil::class);
    }
}
