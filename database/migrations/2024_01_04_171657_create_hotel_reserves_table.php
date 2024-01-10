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
        Schema::create('hotel_reserves', function (Blueprint $table) {
            $table->integer('id');
            $table->string('hotel_name', 50);
            $table->integer('id_hotel');
            $table->integer('id_tours');
            $table->string('category', 10);
            $table->integer('days')->nullable()->default(0);
            $table->integer('nights')->nullable()->default(0);
            $table->date('creation_date');
            $table->date('starting_date');
            $table->date('ending_date');
            $table->integer('id_cliente');
            $table->integer('type_client');
            $table->integer('id_agencia');
            $table->integer('roooms')->nullable()->default(0);
            $table->integer('adult')->nullable()->default(0);
            $table->integer('child')->nullable()->default(0);
            $table->integer('total_persons')->nullable()->default(0);
            $table->integer('room1_adult')->nullable()->default(0);
            $table->integer('room1_child')->nullable()->default(0);
            $table->integer('room2_adult')->nullable()->default(0);
            $table->integer('room2_child')->nullable()->default(0);
            $table->integer('room3_adult')->nullable()->default(0);
            $table->integer('room3_child')->nullable()->default(0);
            $table->integer('room4_adult')->nullable()->default(0);
            $table->integer('room4_child')->nullable()->default(0);
            $table->double('sql');
            $table->double('dbl');
            $table->double('tpl');
            $table->double('qua');
            $table->integer('sql_indicativo')->nullable();
            $table->integer('dbl_indicativo')->nullable();
            $table->integer('tpl_indicativo')->nullable();
            $table->integer('qua_indicativo')->nullable();
            $table->integer('room1')->nullable();
            $table->integer('room2')->nullable();
            $table->integer('room3')->nullable();
            $table->integer('room4')->nullable();
            $table->integer('room1_c')->nullable();
            $table->integer('room2_c')->nullable();
            $table->integer('room3_c')->nullable();
            $table->integer('room4_c')->nullable();
            $table->string('type', 10)->nullable()->default('0');
            $table->integer('additional_night')->nullable()->default(0);
            $table->integer('free_night')->default(0);
            $table->integer('free_night_buffet')->default(0);
            $table->integer('nightprice');
            $table->double('breakfastprice', 10, 2);
            $table->integer('totalnights');
            $table->double('totalbreakfasts', 10, 2);
            $table->double('total_paid')->nullable()->default(0);
            $table->boolean('buffet')->default(false);
            $table->boolean('super_breakfast');
            $table->integer('freeday');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_reserves');
    }
};
