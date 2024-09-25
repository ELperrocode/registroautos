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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id('id_vehiculo');
            $table->string('placa')->unique();
            $table->unsignedBigInteger('marca_id'); 
            $table->unsignedBigInteger('modelo_id');
            $table->unsignedBigInteger('color_id'); 
            $table->unsignedBigInteger('tipo_vehiculo_id'); 
             $table->unsignedBigInteger('propietario_id');
            $table->integer('anio');
            $table->string('numero_motor')->unique();
            $table->string('numero_chasis')->unique();
            $table->timestamps();
        
            
            $table->foreign('marca_id')->references('id_marca')->on('marcas')->onDelete('cascade');
            $table->foreign('modelo_id')->references('id_modelo')->on('modelos')->onDelete('cascade');
            $table->foreign('color_id')->references('id_color')->on('colors')->onDelete('cascade');
            $table->foreign('tipo_vehiculo_id')->references('id_tipo')->on('tipo_vehiculos')->onDelete('cascade');
            $table->foreign('propietario_id')->references('id_propietario')->on('propietarios')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
