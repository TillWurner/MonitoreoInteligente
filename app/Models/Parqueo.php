<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parqueo extends Model
{

    protected $table = 'parqueo';

    protected $fillable = [
        'nombre',
        'ubicacion',
        'id_user'
    ];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }

    public function vehiculo(){
        return $this->hasMany(Vehiculo::class,'id_parqueo');
    }

    public function planta(){
        return $this->hasMany(Planta::class,'id_parqueo');
    }
}
