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
        Schema::create('tarifasvip', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('cantidad')->nullable();
            $table->double('price', 10, 2)->nullable();
            $table->integer('type_rate')->default(0);
            $table->integer('id_agency')->default(-1);
            $table->text('company_name')->nullable();
            $table->dateTime('annio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarifasvip');
    }
};
