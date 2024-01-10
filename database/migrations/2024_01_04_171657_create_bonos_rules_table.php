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
        Schema::create('bonos_rules', function (Blueprint $table) {
            $table->integer('id');
            $table->string('tipo_bono', 30)->default('trip')->comment('puntos, cumpleaÃ±os o reservas');
            $table->double('valor')->default(0)->comment('valor del bono en dolares');
            $table->integer('vencimiento')->default(30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bonos_rules');
    }
};
