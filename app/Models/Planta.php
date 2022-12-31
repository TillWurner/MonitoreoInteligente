<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{

    protected $table = 'planta';

    protected $fillable = [
        'cantidad_espacios',
        'numero',
        'id_parqueo'
    ];

    use HasFactory;

    public function parqueo(){
        return $this->belongsTo(Parqueo::class,'id_parqueo');
    }

    public function camara(){
        return $this->hasMany(Camara::class,'id_planta');
    }
}
