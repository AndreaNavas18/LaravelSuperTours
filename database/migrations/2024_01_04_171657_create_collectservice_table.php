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
        Schema::create('collectservice', function (Blueprint $table) {
            $table->integer('id');
            $table->unsignedInteger('id_servicio');
            $table->string('tipo_servicio', 100);
            $table->float('monto_pagado', 10, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collectservice');
    }
};
