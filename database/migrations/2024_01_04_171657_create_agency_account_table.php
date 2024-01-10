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
        Schema::create('agency_account', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_agencia')->nullable();
            $table->text('person_charge')->nullable();
            $table->text('first_name')->nullable();
            $table->text('eemail')->nullable();
            $table->text('phone')->nullable();
            $table->text('acount')->nullable();
            $table->integer('opcion1')->nullable();
            $table->integer('opcion2')->nullable();
            $table->integer('opcion3')->nullable();
            $table->integer('opcion4')->nullable();
            $table->integer('opcion5')->nullable();
            $table->integer('days')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agency_account');
    }
};
