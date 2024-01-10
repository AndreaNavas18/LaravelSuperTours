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
        Schema::create('passengers_bus', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('id_reservas');
            $table->integer('trip');
            $table->integer('id_bus');
            $table->text('driver');
            $table->text('driver2');
            $table->text('driver3');
            $table->text('driver4');
            $table->text('driver5');
            $table->date('fec_ini');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passengers_bus');
    }
};
