<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName(), // Nombre de la persona
            'apellido' => $this->faker->lastName(), // Apellido de la persona
            'email' => $this->faker->unique()->safeEmail(), // Correo electrónico único
            'telefono' => $this->faker->optional()->phoneNumber(), // Número de teléfono (opcional)
            'fecha_nacimiento' => $this->faker->optional()->date(), // Fecha de nacimiento (opcional)
            'direccion' => $this->faker->optional()->address(), // Dirección (opcional)
            'pais' => $this->faker->country(), // País
        ];
    }
}
