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
        Schema::create('bonos', function (Blueprint $table) {
            $table->integer('id');
            $table->string('codigo', 30);
            $table->string('nombre', 30);
            $table->integer('tipo_cliente')->default(0)->comment('tipo de cliente a que aplica');
            $table->integer('rule_id');
            $table->integer('asignado')->nullable()->comment('si esta asignado a algun cliente');
            $table->char('redimido', 2)->default('No')->comment('si ya fue redimido');
            $table->double('valor')->comment('valor total del bono en dolares');
            $table->integer('cantidad')->comment('cantidad de bonos canjeados');
            $table->date('fecha_creacion');
            $table->date('fecha_vencimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bonos');
    }
};
