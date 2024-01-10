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
        Schema::create('attraction_trafic', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_tours');
            $table->string('type_tour', 6);
            $table->integer('id_park');
            $table->string('group', 10);
            $table->date('creation_date');
            $table->date('starting_date');
            $table->date('ending_date');
            $table->string('admission', 3);
            $table->string('trafic', 3);
            $table->integer('id_cliente');
            $table->integer('type_client');
            $table->integer('id_agencia');
            $table->integer('adult');
            $table->integer('child');
            $table->integer('total_person');
            $table->double('admission_child');
            $table->double('admission_adtul');
            $table->double('totalAdmission');
            $table->integer('precio_varios')->default(0)->comment('si tiene precio paquete');
            $table->integer('cantidad')->default(0)->comment('cantidad de parques del grupo que tienen precio especial');
            $table->double('v_p_child')->default(0)->comment('valor por children en el paquete');
            $table->double('v_p_adult')->default(0)->comment('valor por adulto en el paquete');
            $table->double('transpor_adult');
            $table->double('transpor_child');
            $table->double('totalTraspor');
            $table->double('total_paid');
            $table->text('n_parque')->nullable();
            $table->text('n_grupo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attraction_trafic');
    }
};
