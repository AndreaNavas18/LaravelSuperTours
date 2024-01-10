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
        Schema::create('grupo_parques_oneday', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('grupo_parque')->default(0);
            $table->integer('g1')->default(0);
            $table->integer('g2')->default(0);
            $table->integer('g3')->default(0);
            $table->integer('g4')->default(0);
            $table->integer('g5')->default(0);
            $table->integer('g6')->default(0);
            $table->integer('g7')->default(0);
            $table->integer('g8')->default(0);
            $table->integer('g9')->default(0);
            $table->integer('g10')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo_parques_oneday');
    }
};
