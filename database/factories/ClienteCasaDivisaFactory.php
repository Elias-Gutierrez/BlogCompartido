<?php

namespace Database\Factories;

use App\Models\ClienteCasaDivisa;
use App\Models\Persona;
use App\Models\CasasDeApuestas;
use App\Models\Divisas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClienteCasaDivisa>
 */
class ClienteCasaDivisaFactory extends Factory
{
    protected $model = ClienteCasaDivisa::class;

    public function definition(): array
    {
        return [
            'persona_id' => Persona::inRandomOrder()->first()->id, // Selecciona una persona existente
            'casa_id' => CasasDeApuestas::inRandomOrder()->first()->id, // Selecciona una casa existente
            'divisa_id' => Divisas::inRandomOrder()->first()->id, // Selecciona una divisa existente
            'fecha_asignacion' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
