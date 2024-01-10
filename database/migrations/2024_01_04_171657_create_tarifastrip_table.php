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
        Schema::create('tarifastrip', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('trip_no')->nullable();
            $table->double('adult', 10, 2);
            $table->double('child', 10, 2);
            $table->integer('type_rate')->default(0);
            $table->integer('id_agency')->default(-1);
            $table->text('company_name')->nullable();
            $table->dateTime('annio');
            $table->integer('id_ratesvalid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarifastrip');
    }
};
