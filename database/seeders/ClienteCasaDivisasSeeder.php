<?php

namespace Database\Seeders;

use App\Models\ClienteCasaDivisa;
use Illuminate\Database\Seeder;

class ClienteCasaDivisasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generar 20 registros para cliente_casa_divisas
        ClienteCasaDivisa::factory(20)->create();
    }
}
