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
        Schema::create('plan_cuentas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE'); // Foreign Key
            $table->foreignId('ejercicio_id');
            $table->foreign('ejercicio_id')->references('id')->on('ejercicios')->onDelete('CASCADE')->onUpdate('CASCADE'); // Foreign Key
            $table->text('file_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_cuentas');
    }
};
