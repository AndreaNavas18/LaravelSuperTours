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
        Schema::create('ofertas', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('trip_from');
            $table->integer('trip_to');
            $table->string('fecha_ini', 50)->nullable();
            $table->string('fecha_fin', 50)->nullable();
            $table->string('trip_no', 10)->nullable();
            $table->double('price', 10, 2)->nullable();
            $table->double('price2', 10, 2)->nullable();
            $table->double('price3', 10, 2)->nullable();
            $table->double('price4', 10, 2)->nullable();
            $table->text('regular')->nullable();
            $table->text('frecuente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
};
