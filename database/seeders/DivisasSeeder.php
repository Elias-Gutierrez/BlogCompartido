<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Divisas;

class DivisasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lista fija de divisas con sus códigos y nombres
        $divisas = [
            ['codigo' => 'USD', 'nombre' => 'Dollar'],
            ['codigo' => 'EUR', 'nombre' => 'Euro'],
            ['codigo' => 'JPY', 'nombre' => 'Yen'],
            ['codigo' => 'GBP', 'nombre' => 'Pound'],
            ['codigo' => 'MXN', 'nombre' => 'Peso'],
        ];

        // Insertar cada divisa en la base de datos solo si no existe
        foreach ($divisas as $divisa) {
            Divisas::updateOrCreate(
                ['codigo' => $divisa['codigo']], // Buscar por código único
                ['nombre' => $divisa['nombre']] // Actualizar o crear con estos valores
            );
        }
    }
}
