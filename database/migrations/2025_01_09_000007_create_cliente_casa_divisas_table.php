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

        if (!Schema::hasTable('personas') || !Schema::hasTable('casas_de_apuestas') || !Schema::hasTable('divisas')) {
            throw new Exception("Las tablas 'personas', 'casas_de_apuestas' y 'divisas' deben existir antes de ejecutar esta migración.");
        }

        Schema::create('cliente_casa_divisas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('persona_id')->constrained('personas')->onDelete('cascade');
            $table->foreignId('casa_id')->constrained('casas_de_apuestas')->onDelete('cascade');
            $table->foreignId('divisa_id')->constrained('divisas')->onDelete('cascade');
            $table->dateTime('fecha_asignacion');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_casa_divisas');
    }
};
