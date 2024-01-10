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
        Schema::create('tarifario_a', function (Blueprint $table) {
            $table->integer('id');
            $table->string('fecha_ini', 50);
            $table->string('fecha_fin', 50);
            $table->integer('id_hotel');
            $table->integer('categoria');
            $table->integer('days');
            $table->integer('nights');
            $table->double('sgl');
            $table->double('dbl');
            $table->double('tpl');
            $table->double('qua');
            $table->integer('child');
            $table->double('s_c_hab');
            $table->double('trip_100');
            $table->double('trip_200');
            $table->double('trip_300');
            $table->double('trip_101');
            $table->double('trip_201');
            $table->double('trip_301');
            $table->double('t_in');
            $table->double('t_out');
            $table->double('car_in');
            $table->double('car_out');
            $table->double('na_sa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarifario_a');
    }
};
