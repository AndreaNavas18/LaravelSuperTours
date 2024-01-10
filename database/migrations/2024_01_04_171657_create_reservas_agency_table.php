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
        Schema::create('reservas_agency', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_reservas')->default(0);
            $table->integer('id_agencia')->nullable();
            $table->integer('id_cliente')->nullable();
            $table->integer('type_client');
            $table->integer('id_useragency');
            $table->text('paid_type')->nullable();
            $table->string('metodo_paid', 40)->nullable();
            $table->double('paid_net', 10, 2)->nullable();
            $table->double('paid_full', 10, 2)->nullable();
            $table->double('otheramount')->default(0);
            $table->double('agency_fee', 10, 2)->nullable();
            $table->double('comision', 10, 2)->nullable();
            $table->integer('paper_voucher')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas_agency');
    }
};
