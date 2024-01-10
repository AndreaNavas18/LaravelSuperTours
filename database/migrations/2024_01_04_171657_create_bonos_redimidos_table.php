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
        Schema::create('bonos_redimidos', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_cliente');
            $table->integer('id_reserva');
            $table->string('bono_id', 30);
            $table->integer('paid_ammount')->default(0);
            $table->integer('paid_points')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bonos_redimidos');
    }
};
