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
        Schema::create('pickup_dropoff_super', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_area');
            $table->string('place', 60);
            $table->string('address', 140);
            $table->integer('valid');
            $table->integer('posicion');
            $table->integer('type_web')->default(1)->comment('Si es 1 se una para usuarios Web, si es 0 se usa para agencias y operadores');
            $table->integer('active_web');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pickup_dropoff_super');
    }
};
