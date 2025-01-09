<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteCasaDivisa extends Model
{
    use HasFactory;

    protected $fillable = [
        'persona_id',
        'casa_id',
        'divisa_id',
        'fecha_asignacion',
    ];
    //---------------------------------------------------------//
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    public function casa()
    {
        return $this->belongsTo(CasasDeApuestas::class);
    }

    public function divisa()
    {
        return $this->belongsTo(Divisas::class);
    }
}
