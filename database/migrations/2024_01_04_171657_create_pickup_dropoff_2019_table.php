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
        Schema::create('pickup_dropoff_2019', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_area');
            $table->string('place', 60);
            $table->string('address', 140);
            $table->integer('valid');
            $table->integer('posicion');
            $table->integer('pos_exp');
            $table->integer('trip100');
            $table->integer('trip200');
            $table->integer('trip300');
            $table->integer('trip101');
            $table->integer('trip201');
            $table->integer('trip301');
            $table->string('type_pick', 20);
            $table->integer('active_sur');
            $table->integer('active_web');
            $table->integer('active_travelag');
            $table->integer('active_opl');
            $table->integer('active_oppr');
            $table->integer('estado')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pickup_dropoff_2019');
    }
};
