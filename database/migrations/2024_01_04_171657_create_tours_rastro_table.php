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
        Schema::create('tours_rastro', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_tours');
            $table->string('tipo_cambio', 8);
            $table->text('detalles');
            $table->dateTime('fecha');
            $table->integer('usuario');
            $table->string('tipo_usuario', 10);
            $table->string('id_hotel', 11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours_rastro');
    }
};
