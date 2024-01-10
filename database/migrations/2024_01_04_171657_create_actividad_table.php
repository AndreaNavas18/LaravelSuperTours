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
        Schema::create('actividad', function (Blueprint $table) {
            $table->comment('Guardar actividades realizadas en la DB');
            $table->integer('id');
            $table->integer('table');
            $table->integer('id_table');
            $table->string('type_change', 1);
            $table->text('sql');
            $table->text('comentario');
            $table->dateTime('fecha');
            $table->integer('user');
            $table->string('type_user', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad');
    }
};
