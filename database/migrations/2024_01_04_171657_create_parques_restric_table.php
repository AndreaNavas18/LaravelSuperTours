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
        Schema::create('parques_restric', function (Blueprint $table) {
            $table->integer('id_parque')->nullable();
            $table->integer('id_grupo')->nullable();
            $table->string('fecha_ini', 20);
            $table->string('fecha_fin', 20);
            $table->integer('park_select2')->default(0);
            $table->integer('park_select3')->default(0);
            $table->integer('park_select4')->default(0);
            $table->integer('park_select5')->default(0);
            $table->integer('park_select6')->default(0);
            $table->integer('tari_2')->default(0);
            $table->integer('tari_3')->default(0);
            $table->integer('tari_4')->default(0);
            $table->integer('tari_5')->default(0);
            $table->integer('tari_6')->default(0);
            $table->string('inicio', 20)->nullable();
            $table->string('fin', 20)->nullable();
            $table->integer('cantidad')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parques_restric');
    }
};
