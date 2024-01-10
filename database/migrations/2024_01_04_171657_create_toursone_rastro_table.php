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
        Schema::create('toursone_rastro', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_tours');
            $table->string('tipo_cambio', 8);
            $table->text('detalles');
            $table->dateTime('fecha');
            $table->integer('usuario');
            $table->string('tipo_usuario', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toursone_rastro');
    }
};
