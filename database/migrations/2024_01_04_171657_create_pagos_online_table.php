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
        Schema::create('pagos_online', function (Blueprint $table) {
            $table->integer('id');
            $table->string('txn_id', 50);
            $table->dateTime('created');
            $table->string('tipo_tarjeta');
            $table->string('brand', 50);
            $table->string('last4', 10);
            $table->string('paid_amount', 10);
            $table->string('paid_amount_currency', 10);
            $table->string('payment_status', 25);
            $table->string('status_msg', 50);
            $table->string('cod_conf', 50);
            $table->string('cardholder_name', 50);
            $table->string('passenger_name', 250);
            $table->string('email', 50);
            $table->string('phone', 25);
            $table->string('address', 250);
            $table->string('country', 50);
            $table->string('city', 50);
            $table->string('zip_code', 50);
            $table->string('state', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos_online');
    }
};
