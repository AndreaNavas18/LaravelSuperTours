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
        Schema::create('parques_add', function (Blueprint $table) {
            $table->integer('id_parq');
            $table->integer('idfk_parq');
            $table->tinyInteger('oneday_parq');
            $table->tinyInteger('multid_parq');
            $table->text('linkticket_parq')->nullable();
            $table->string('estado_parq')->nullable();
            $table->dateTime('fechacr_parq')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parques_add');
    }
};
