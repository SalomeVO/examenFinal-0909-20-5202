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
        Schema::create('registro_nacimientos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 75);
            $table->decimal("peso", 8,5);
            $table->dateTime('fecha_hora_nacimiento');
            $table->string("color_de_ojos", 75);
            $table->tinyInteger("lunares");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_nacimientos');
    }
};
