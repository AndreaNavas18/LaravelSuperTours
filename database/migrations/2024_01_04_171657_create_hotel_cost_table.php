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
        Schema::create('hotel_cost', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_hotel')->nullable();
            $table->string('fecha_ini', 150)->nullable();
            $table->string('fecha_fin', 150)->nullable();
            $table->double('sgl')->nullable();
            $table->double('dbl')->nullable();
            $table->double('tpl')->nullable();
            $table->double('qua')->nullable();
            $table->double('brackfast')->nullable();
            $table->double('super_breakfast')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_cost');
    }
};
