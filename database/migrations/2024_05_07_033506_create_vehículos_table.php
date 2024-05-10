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
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('capacidad');
            $table->string('placa', 45);
            $table->unsignedInteger('tipo_vehiculos_id');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(["placa"], 'placa_UNIQUE');

            $table->index(["tipo_vehiculos_id"], 'fk_vehiculos_tipo_vehiculos_idx');


            $table->foreign('tipo_vehiculos_id', 'fk_vehiculos_tipo_vehiculos_idx')
                ->references('id')->on('tipo_vehiculos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
