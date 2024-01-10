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
        Schema::create('accident_drag', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_driver');
            $table->text('fecha')->nullable();
            $table->string('reporte', 1000)->nullable();
            $table->text('anexo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accident_drag');
    }
};
