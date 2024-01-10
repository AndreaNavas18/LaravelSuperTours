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
        Schema::create('client_bonos', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('client_id');
            $table->integer('reserve_id');
            $table->string('bono_id', 30);
            $table->string('bono_nombre', 30)->nullable();
            $table->integer('points')->default(0)->comment('puntos totales del bono');
            $table->date('valid_until')->comment('valido hasta');
            $table->boolean('active')->comment('si esta activo');
            $table->integer('ammount')->default(0)->comment('cantidad de bonos a canjear');
            $table->double('discuont_value')->default(0)->comment('descuento total en dolares');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_bonos');
    }
};
