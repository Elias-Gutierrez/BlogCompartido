<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();

            $table->string('nombre', 100); // Nombre de la persona
            $table->string('apellido', 100); // Apellido de la persona
            $table->string('email', 150)->unique(); // Correo electrónico único
            $table->string('telefono', 25)->nullable(); // Teléfono (opcional)
            $table->date('fecha_nacimiento')->nullable(); // Fecha de nacimiento (opcional)
            $table->string('direccion', 255)->nullable(); // Dirección de residencia (opcional)
            $table->string('pais', 100); // País de residencia

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
