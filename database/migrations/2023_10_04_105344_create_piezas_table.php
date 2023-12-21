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
        Schema::create('piezas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100)->unique();
            $table->string('numero_serie',120);
            $table->date('fecha_salida');
            $table->string('precio',5);
            $table->string('stock',300)->nullable();
            $table->unsignedBigInteger('marca_id');
            $table->timestamps();
            $table->foreign('marca_id')->references('id')->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piezas');
    }
};
