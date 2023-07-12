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
        Schema::create('persona_x_dependencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_persona');
            $table->foreign('id_persona')->references('id')->on('personas');
            $table->unsignedBigInteger('id_dependencia');
            $table->foreign('id_dependencia')->references('id')->on('dependencias');
            $table->unsignedBigInteger('id_cargo');
            $table->foreign('id_cargo')->references('id')->on('cargos');
            $table->unsignedBigInteger('id_jerarquia');
            $table->foreign('id_jerarquia')->references('id')->on('jerarquias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona_x_dependencias');
    }
};
