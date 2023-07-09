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
        Schema::create('AutosProduc', function (Blueprint $table) {
            $table->id();
            $table->string('Pais');
            $table->string('Fecha_Creacion');
            $table->timestamp('Fceha_Public');
            $table->string('id');
            $table->string('Nombre');
            $table->string('Actualizacion');
            $table->string('Tipo_vehiculo');
            $table->string('wmi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('AutosProduc');
    }
};
