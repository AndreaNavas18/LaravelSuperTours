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
        Schema::create('driver', function (Blueprint $table) {
            $table->integer('id');
            $table->text('firstname')->nullable();
            $table->text('lastname')->nullable();
            $table->text('phone')->nullable();
            $table->text('phone2')->nullable();
            $table->text('email')->nullable();
            $table->text('licensedriver')->nullable();
            $table->text('licensetype')->nullable();
            $table->text('ssegurity')->nullable();
            $table->text('address')->nullable();
            $table->text('city')->nullable();
            $table->text('zipcode')->nullable();
            $table->text('datehirin')->nullable();
            $table->text('datehirinfin')->nullable();
            $table->text('reasotermination')->nullable();
            $table->text('saludfechafin')->nullable();
            $table->text('hiringcompany')->nullable();
            $table->text('avatar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver');
    }
};
