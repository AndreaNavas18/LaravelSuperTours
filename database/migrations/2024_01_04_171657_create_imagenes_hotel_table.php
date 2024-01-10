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
        Schema::create('imagenes_hotel', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_hotel');
            $table->string('ruta_resize', 70);
            $table->string('ruta_peque', 70);
            $table->string('nombre_original', 50)->nullable();
            $table->string('descripcion', 50)->nullable();
            $table->integer('orden')->default(9999);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagenes_hotel');
    }
};
