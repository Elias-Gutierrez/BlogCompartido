<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Divisas>
 */
class DivisasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Lista fija de divisas con sus códigos
        $divisas = [
            ['codigo' => 'USD', 'nombre' => 'Dollar'],
            ['codigo' => 'EUR', 'nombre' => 'Euro'],
            ['codigo' => 'JPY', 'nombre' => 'Yen'],
            ['codigo' => 'GBP', 'nombre' => 'Pound'],
            ['codigo' => 'MXN', 'nombre' => 'Peso'],
        ];

        // Obtener el índice actual de generación
        static $index = 0;

        // Reiniciar el índice si supera la cantidad de divisas
        $divisa = $divisas[$index];
        $index = ($index + 1) % count($divisas);

        return [
            'codigo' => $divisa['codigo'],
            'nombre' => $divisa['nombre'],
        ];
    }
}
