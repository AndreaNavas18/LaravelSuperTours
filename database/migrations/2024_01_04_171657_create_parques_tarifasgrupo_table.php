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
        Schema::create('parques_tarifasgrupo', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_grupo')->nullable();
            $table->double('adult', 10, 2)->nullable();
            $table->double('child', 10, 2)->nullable();
            $table->integer('type_rate')->default(0);
            $table->integer('id_agency')->default(-1);
            $table->text('company_name')->nullable();
            $table->dateTime('annio');
            $table->string('start_date', 50);
            $table->string('end_date', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parques_tarifasgrupo');
    }
};
