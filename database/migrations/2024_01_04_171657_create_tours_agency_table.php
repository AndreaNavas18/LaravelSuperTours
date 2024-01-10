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
        Schema::create('tours_agency', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_reserva');
            $table->integer('id_tours');
            $table->string('type_tour', 6);
            $table->integer('id_agencia');
            $table->double('comision')->default(0);
            $table->integer('type_rate')->default(0);
            $table->double('agency_fee')->default(0);
            $table->text('tipo_pago');
            $table->text('pago');
            $table->double('totalouta')->default(0);
            $table->double('otheramount')->default(0);
            $table->double('total')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours_agency');
    }
};
