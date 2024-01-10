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
        Schema::create('tours', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_client');
            $table->integer('type_client');
            $table->integer('platinum')->default(0);
            $table->string('id_agency', 11);
            $table->string('code_conf', 30);
            $table->string('agency_employee', 30);
            $table->dateTime('creation_date');
            $table->date('starting_date');
            $table->date('ending_date');
            $table->integer('length_day')->default(0);
            $table->integer('length_nights')->nullable()->default(0);
            $table->integer('adult')->default(0);
            $table->integer('child')->default(0);
            $table->integer('id_reserva')->default(-1);
            $table->string('id_transfer_in', 11);
            $table->string('id_transfer_out', 11);
            $table->string('id_hotel_reserve', 11);
            $table->text('comments');
            $table->text('comments2');
            $table->string('tipo_pago', 45);
            $table->string('pago', 45);
            $table->string('op_pago', 10);
            $table->string('op_pago_conductor', 10);
            $table->double('total', 10, 2)->default(0);
            $table->double('totalouta', 10, 2)->default(0);
            $table->double('otheramount', 10, 2)->default(0);
            $table->double('otheramount_sin_tax', 10, 2)->default(0);
            $table->double('passenger_balance_due', 10, 2)->default(0);
            $table->double('paid_driver', 10, 2)->default(0);
            $table->double('agency_balance_due', 10, 2)->default(0);
            $table->double('total_paid', 10, 2)->default(0);
            $table->double('pred_paid_amount', 10, 2)->default(0);
            $table->double('total_charge', 10, 2)->default(0);
            $table->double('extra_charge', 10, 2)->default(0);
            $table->integer('descuento_procentaje')->default(0);
            $table->double('descuento_valor', 10, 2)->default(0);
            $table->string('canal', 10);
            $table->string('estado', 20)->default('CONFIRMED');
            $table->text('mensaje_tiquetes')->nullable();
            $table->integer('tarifario');
            $table->integer('id_bus')->default(-1);
            $table->string('ip_op', 20);
            $table->string('confir_dep', 35);
            $table->string('confir_ret', 35);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
};
