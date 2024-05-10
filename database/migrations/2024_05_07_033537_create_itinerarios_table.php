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
        Schema::create('itinerarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('fecha', 45);
            $table->time('hora_salida');
            $table->unsignedInteger('rutas_id');
            $table->unsignedInteger('vehiculos_id');
            $table->unsignedInteger('conductores_id');
            $table->timestamps();
            $table->softDeletes();

            $table->index(["rutas_id"], 'fk_itinerarios_rutas1_idx');

            $table->index(["vehiculos_id"], 'fk_itinerarios_vehiculos1_idx');

            $table->index(["conductores_id"], 'fk_itinerarios_conductores1_idx');


            $table->foreign('rutas_id', 'fk_itinerarios_rutas1_idx')
                ->references('id')->on('rutas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('vehiculos_id', 'fk_itinerarios_vehiculos1_idx')
                ->references('id')->on('vehiculos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('conductores_id', 'fk_itinerarios_conductores1_idx')
                ->references('id')->on('conductores')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itinerarios');
    }
};
