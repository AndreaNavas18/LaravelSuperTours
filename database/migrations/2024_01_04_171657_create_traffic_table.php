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
        Schema::create('traffic', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_tour')->nullable();
            $table->string('type_tour', 10);
            $table->time('time_am')->comment('Hora de recogida en la mañana');
            $table->string('from', 100)->nullable()->comment('A donde lo tienen que ir a buscar');
            $table->string('to', 100)->nullable()->comment('A donde tienen que dejarlo');
            $table->integer('id_attraction_trafic')->nullable();
            $table->date('date')->comment('Fecha del trafico');
            $table->integer('id_cliente')->nullable();
            $table->time('time_pm')->nullable()->comment('Hora de recogica en la tarde');
            $table->integer('id_bus_am')->nullable()->comment('id del bus de la mañana');
            $table->integer('id_bus_pm')->nullable()->comment('id del bus de la tarde');
            $table->string('type_traffic', 50)->comment('Tipo del trafico (PARK, BUS, VIP, AIRPORT)');
            $table->integer('driver_am')->nullable()->comment('conductor de la mañana');
            $table->integer('driver_pm')->nullable()->comment('conductor de la tarde');
            $table->integer('type_ticket')->nullable()->comment('Indica si se van a entregar tickets (*22, nt, rt, etc)');
            $table->string('hotel_name', 100)->nullable();
            $table->string('parking', 50)->nullable();
            $table->string('estado', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traffic');
    }
};
