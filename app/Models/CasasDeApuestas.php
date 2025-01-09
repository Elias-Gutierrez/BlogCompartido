<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasasDeApuestas extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "provCuotas",
        "pais",
        "fecha_creacion"
    ];

    //---------------------------------------------------------//
    public function clienteCasaDivisas()
    {
        return $this->hasMany(ClienteCasaDivisa::class);
    }

}
