<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{

    protected $table = 'vehiculo';

    protected $fillable = [
        'placa',
        'fecha',
        'monto_pagar',
        'id_parqueo'
    ];

    use HasFactory;

    public function parqueo(){
        return $this->belongsTo(Parqueo::class,'id_parqueo');
    }
}
