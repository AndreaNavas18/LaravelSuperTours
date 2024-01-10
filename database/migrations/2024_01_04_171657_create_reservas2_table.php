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
        Schema::create('reservas2', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_tours')->default(-1);
            $table->string('type_tour', 6);
            $table->text('fecha_ini')->nullable();
            $table->integer('trip_no')->nullable();
            $table->integer('trip_no2')->nullable();
            $table->text('tipo_ticket')->nullable();
            $table->text('fromt')->nullable();
            $table->text('tot')->nullable();
            $table->integer('fromt2')->default(0);
            $table->integer('tot2')->default(0);
            $table->text('firsname')->nullable();
            $table->text('lasname')->nullable();
            $table->string('email', 150)->nullable();
            $table->time('deptime1');
            $table->time('deptime2');
            $table->time('arrtime1');
            $table->time('arrtime2');
            $table->double('precio_trip1_a')->default(0)->comment('Precio trip 1 por adults');
            $table->double('precio_trip1_c')->default(0)->comment('Precio trip 1 por children');
            $table->double('precio_trip2_a')->default(0)->comment('Precio Trip 2 por Adults');
            $table->double('precio_trip2_c')->default(0)->comment('Precio Trip 2 por children');
            $table->double('precio_exten1_a')->default(0)->comment('Precio Exten 1 por Adults');
            $table->double('precio_exten1_c')->default(0)->comment('Precio Exten 1 por Children');
            $table->double('precio_exten2_a')->default(0)->comment('Precio Exten 2 por Adults');
            $table->double('precio_exten2_c')->default(0)->comment('Precio Exten 2 por Children');
            $table->double('precio_exten3_a')->default(0)->comment('Precio Exten 3 por adults');
            $table->double('precio_exten3_c')->default(0)->comment('Precio Exten 3 por children');
            $table->double('precio_exten4_a')->default(0)->comment('Precio Exten 4 por Adults');
            $table->double('precio_exten4_c')->default(0)->comment('Precio Exten 4 por Children');
            $table->double('precioA');
            $table->double('precioN');
            $table->integer('extension1');
            $table->double('precio_e1');
            $table->text('pickup_exten1');
            $table->integer('extension2');
            $table->double('precio_e2');
            $table->text('pickup_exten2');
            $table->integer('extension3');
            $table->double('precio_e3');
            $table->text('pickup_exten3');
            $table->integer('extension4');
            $table->double('precio_e4');
            $table->text('pickup_exten4');
            $table->string('room1', 10)->nullable();
            $table->string('room2', 10)->nullable();
            $table->string('fecha_salida', 10)->nullable();
            $table->string('fecha_retorno', 10)->nullable();
            $table->integer('pax')->nullable()->comment('adult');
            $table->integer('pax2')->nullable()->comment('child');
            $table->integer('pax3')->nullable()->comment('infat');
            $table->integer('id_clientes')->nullable();
            $table->double('customer_disabilities')->default(0);
            $table->integer('pickup1')->nullable();
            $table->integer('dropoff1')->nullable();
            $table->integer('pickup2')->nullable();
            $table->integer('dropoff2')->nullable();
            $table->text('tipo_pago')->nullable();
            $table->string('pago', 45);
            $table->string('op_pago', 10);
            $table->double('totaltotal', 10, 2)->nullable();
            $table->double('otheramount', 10, 2)->default(0);
            $table->double('paid_driver', 10, 2)->default(0);
            $table->double('passenger_balance_due', 10, 2)->default(0);
            $table->double('pred_paid_amount', 10, 2)->default(0);
            $table->double('agency_balance_due', 10, 2)->default(0);
            $table->double('total_paid', 10, 2)->default(0);
            $table->double('total_charge', 10, 2)->default(0);
            $table->integer('id1');
            $table->integer('id2');
            $table->double('extra_charge');
            $table->integer('descuento_procentaje')->default(0);
            $table->double('descuento_valor', 10, 2)->default(0);
            $table->double('total2', 10, 2)->nullable();
            $table->text('codconf')->nullable();
            $table->text('hora')->nullable();
            $table->text('comments')->nullable();
            $table->text('comments2');
            $table->integer('resident');
            $table->text('agen')->nullable();
            $table->integer('tipo_client')->nullable();
            $table->integer('reward_id')->nullable();
            $table->integer('agency')->nullable()->default(-1);
            $table->integer('luggage1')->default(-1);
            $table->integer('luggage2')->default(-1);
            $table->string('canal', 10)->default('WEBSALE');
            $table->string('estado', 20)->default('CONFIRMED');
            $table->string('ip_op', 150);
            $table->integer('toutwcharge')->default(-1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas2');
    }
};
