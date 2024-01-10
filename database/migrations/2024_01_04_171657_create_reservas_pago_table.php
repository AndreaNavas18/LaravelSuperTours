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
        Schema::create('reservas_pago', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_reserva');
            $table->string('pago', 45);
            $table->string('tipo_pago', 45);
            $table->double('pagado', 10, 2);
            $table->integer('usuario');
            $table->dateTime('fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas_pago');
    }
};
