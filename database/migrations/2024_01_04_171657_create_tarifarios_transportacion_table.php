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
        Schema::create('tarifarios_transportacion', function (Blueprint $table) {
            $table->integer('id');
            $table->text('special_price_name');
            $table->string('fecha_ini', 20)->nullable();
            $table->string('fecha_fin', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarifarios_transportacion');
    }
};
