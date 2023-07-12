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
        Schema::create('archivo_x_dependencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_dependencia');
            $table->foreign('id_dependencia')->references('id')->on('dependencias');
            $table->unsignedBigInteger('id_archivo');
            $table->foreign('id_archivo')->references('id')->on('archivos');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivo_x_dependencias');
    }
};
