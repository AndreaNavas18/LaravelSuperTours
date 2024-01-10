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
        Schema::create('factura', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_agency');
            $table->date('creation_date');
            $table->double('subtotal', 10, 2);
            $table->double('collect', 10, 2)->default(0);
            $table->double('total', 10, 2)->default(0);
            $table->text('canal')->nullable();
            $table->string('estado', 10)->default('UNPAID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
};
