<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisas extends Model
{
    use HasFactory;
    protected $fillable = [
        "codigo",
        "nombre"
    ] ;

    //---------------------------------------------------------//
    public function clienteCasaDivisas()
    {
        return $this->hasMany(ClienteCasaDivisa::class);
    }

}
