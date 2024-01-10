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
        Schema::create('tours_notacredi', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_tours');
            $table->integer('valor');
            $table->integer('usuario');
            $table->dateTime('fecha');
            $table->string('tipo', 144);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours_notacredi');
    }
};
