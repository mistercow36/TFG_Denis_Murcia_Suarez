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
        Schema::create('ayuda_tecnicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('email',100);
            $table->string('telefono',9);
            $table->string('fecha');
            $table->text('error');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ayuda_tecnicos');
    }
};
