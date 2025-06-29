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
        Schema::create('ninos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->date('fecha_nacimiento');
            $table->string('direccion');
            $table->string('telefono');
            $table->enum('estado', ['ACTIVO', 'INACTIVO']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ninos');
    }
};
