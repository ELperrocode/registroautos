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
        Schema::create('modelos', function (Blueprint $table) {
            $table->id('id_modelo');
            $table->string('nombre_modelo');
            $table->unsignedBigInteger('marca_id'); 
            $table->unsignedBigInteger('tipo_id');
            $table->timestamps();
           

            $table->foreign('tipo_id')->references('id_tipo')->on('tipo_vehiculos')->onDelete('cascade');
            $table->foreign('marca_id') ->references('id_marca') ->on('marcas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos');
    }
};
