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
        Schema::create('traffic_bus', function (Blueprint $table) {
            $table->integer('id');
            $table->string('short_name', 5)->comment('Nombre corto del bus (A1)');
            $table->string('name', 100)->comment('Nombre del bus');
            $table->string('type_bus', 50)->comment('Tipo de bus (van, bus, etc)');
            $table->integer('capacity')->comment('numero de asientos del bus');
            $table->integer('id_driver')->nullable()->comment('id del conducto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traffic_bus');
    }
};
