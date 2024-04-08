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
        Schema::create('motos', function (Blueprint $table) {
            $table->id('id_moto');
            $table->string('marca');
            $table->string('modelo');
            $table->integer('cilindraje');
            $table->date('ano');
            $table->text('descripcion');
            $table->float('precio', 8, 2);
            //$table->boolean('disponible')->default(false);;
            $table->enum('categoria', ['deportiva', 'naked', 'custom', 'touring', 'scooter']);
            $table->enum('color',['blanco', 'negro', 'gris', 'azul', 'amarillo','rojo']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motos');
    }
};
