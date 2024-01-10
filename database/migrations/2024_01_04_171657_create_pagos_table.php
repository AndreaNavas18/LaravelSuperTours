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
        Schema::create('pagos', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('factura');
            $table->integer('monto');
            $table->string('tipo', 15);
            $table->string('medio', 40);
            $table->string('transnu', 20);
            $table->string('adjunto', 500);
            $table->integer('descuento');
            $table->float('por_descuento', 10, 0);
            $table->dateTime('fecha');
            $table->integer('metodo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
};
