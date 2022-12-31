<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camara extends Model
{

    protected $table = 'camara';

    protected $fillable = [
        'id_planta',
    ];

    use HasFactory;

    public function planta(){
        return $this->belongsTo(Planta::class,'id_planta');
    }
}
