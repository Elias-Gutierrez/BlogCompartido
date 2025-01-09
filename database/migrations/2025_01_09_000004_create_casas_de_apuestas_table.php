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
        Schema::create('casas_de_apuestas', function (Blueprint $table) {
            $table->id();

            $table->string('nombre',100);
            $table->string('provCuotas',100);
            $table->string('pais',50);
            $table->timestamp('fecha_creacion')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casas_de_apuestas');
    }
};
