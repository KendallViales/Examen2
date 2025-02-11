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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_atraccion'); // Clave foránea para atracciones
            $table->unsignedBigInteger('id_especie'); // Clave foránea para especies
            $table->string('nombre_usuario', 50);
            $table->integer('calificacion');
            $table->string('detalles', 100);
            $table->timestamps();

            $table->foreign('id_atraccion')->references('id')->on('atracciones');
            $table->foreign('id_especie')->references('id')->on('especies');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
