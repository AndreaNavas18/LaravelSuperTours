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
        Schema::create('clientes2', function (Blueprint $table) {
            $table->integer('id');
            $table->string('username', 150)->nullable();
            $table->text('firstname')->nullable();
            $table->text('lastname')->nullable();
            $table->string('password', 150)->nullable();
            $table->text('phone')->nullable();
            $table->text('celphone')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->text('country')->nullable();
            $table->text('address')->nullable();
            $table->text('zip')->nullable();
            $table->boolean('tipo_client')->nullable();
            $table->text('birthday')->nullable();
            $table->text('fecha_r')->nullable();
            $table->double('points')->nullable();
            $table->double('left_points')->nullable();
            $table->double('paid_points')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes2');
    }
};
