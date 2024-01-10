<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas_trip_puestos', function (Blueprint $table) {
            $table->comment('puestos usados en tiempo real para las reservas');
            $table->integer('id');
            $table->string('trip_to', 4);
            $table->integer('tipo');
            $table->date('fecha_trip');
            $table->integer('cantidad');
            $table->dateTime('fecha_usado');
            $table->integer('usuario');
            $table->string('estado', 10);
            $table->dateTime('fecha_actividad');
            $table->tinyInteger('tarifa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas_trip_puestos');
    }
};
