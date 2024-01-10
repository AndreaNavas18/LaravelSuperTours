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
        Schema::create('tours_pago', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_tours');
            $table->string('pago', 45);
            $table->string('tipo_pago', 45);
            $table->double('pagado', 10, 2)->default(0);
            $table->integer('usuario');
            $table->dateTime('fecha');
            $table->string('tipo', 12);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours_pago');
    }
};
