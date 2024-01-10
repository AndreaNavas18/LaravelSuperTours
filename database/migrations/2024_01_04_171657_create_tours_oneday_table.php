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
        Schema::create('tours_oneday', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_client');
            $table->integer('type_client');
            $table->integer('id_agency');
            $table->string('code_conf', 30);
            $table->string('agency_employee', 30);
            $table->dateTime('creation_date');
            $table->date('starting_date');
            $table->date('ending_date');
            $table->integer('length_day')->default(0);
            $table->integer('length_nights')->nullable()->default(0);
            $table->integer('adult');
            $table->integer('child')->default(0);
            $table->integer('id_reserva')->default(-1);
            $table->integer('id_transfer_in');
            $table->integer('id_transfer_out');
            $table->text('comments');
            $table->text('comments2');
            $table->double('t_price_adult')->nullable()->comment('transportacion adults');
            $table->double('t_price_child')->nullable()->comment('transportacion children');
            $table->double('t_parque_adult')->nullable()->comment('transportacion y suplemento a parques');
            $table->double('t_parque_child')->nullable()->comment('transportacion y suplemento child');
            $table->double('entradas_price_adult')->nullable();
            $table->double('entradas_price_child')->nullable();
            $table->double('price_exten1_adult')->nullable()->comment('precio extension 1 adult');
            $table->double('price_exten1_child')->nullable()->comment('precio extension 1 child');
            $table->double('price_exten2_adult')->nullable()->comment('precio extension 2 adult');
            $table->double('price_exten2_child')->nullable()->comment('precio extension 2 child');
            $table->boolean('price_especial')->nullable()->default(false);
            $table->double('total')->default(0);
            $table->double('totalouta')->default(0);
            $table->double('otheramount')->default(0);
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
            $table->text('tipo_pago')->nullable();
            $table->text('pago');
            $table->integer('op_pago');
            $table->integer('op_pago_conductor');
            $table->string('canal', 10);
            $table->string('estado', 20)->default('CONFIRMED');
            $table->boolean('include_park');
            $table->integer('group_park');
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
        Schema::dropIfExists('tours_oneday');
    }
};
