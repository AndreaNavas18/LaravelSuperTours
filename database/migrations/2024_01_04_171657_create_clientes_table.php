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
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('id');
            $table->string('username', 50)->nullable();
            $table->text('firstname')->nullable();
            $table->text('lastname')->nullable();
            $table->string('password', 50);
            $table->text('phone')->nullable();
            $table->text('celphone')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->text('country')->nullable();
            $table->text('address')->nullable();
            $table->text('zip')->nullable();
            $table->boolean('tipo_client')->nullable()->default(false);
            $table->text('birthday')->nullable();
            $table->text('fecha_r')->nullable();
            $table->double('points')->default(0);
            $table->double('left_points')->default(0);
            $table->double('paid_points')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
