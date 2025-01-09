<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'fecha_nacimiento',
        'direccion',
        'pais'
    ];

    //---------------------------------------------------------//
    public function clienteCasaDivisas()
    {
        return $this->hasMany(ClienteCasaDivisa::class);
    }

}
