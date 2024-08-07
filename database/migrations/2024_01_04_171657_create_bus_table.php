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
        Schema::create('bus', function (Blueprint $table) {
            $table->integer('id');
            $table->text('plate')->nullable();
            $table->text('tipobus')->nullable();
            $table->integer('capacidad')->nullable();
            $table->text('fecha_ini')->nullable();
            $table->text('fecha_fin')->nullable();
            $table->integer('id_vehi')->nullable();
            $table->integer('trip')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus');
    }
};
