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
        Schema::create('admin_parques_tarifa', function (Blueprint $table) {
            $table->integer('id');
            $table->double('adults', 10, 2)->nullable();
            $table->double('child', 10, 2)->nullable();
            $table->integer('id_grupo')->nullable();
            $table->integer('id_parque')->nullable();
            $table->integer('cantidad')->nullable();
            $table->integer('type_rate')->default(1);
            $table->integer('id_agency')->default(-1);
            $table->string('company_name', 40);
            $table->dateTime('annio');
            $table->string('fecha_ini', 50);
            $table->string('fecha_fin', 50);
            $table->double('adults1', 10, 2);
            $table->double('child1', 10, 2);
            $table->double('t_adults', 10, 2);
            $table->double('t_childs', 10, 2);
            $table->string('year', 20);
            $table->string('inicio', 20)->nullable();
            $table->string('fin', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_parques_tarifa');
    }
};
