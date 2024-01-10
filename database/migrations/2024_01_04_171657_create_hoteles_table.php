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
        Schema::create('hoteles', function (Blueprint $table) {
            $table->integer('id');
            $table->text('codigo')->nullable();
            $table->string('categoria', 10)->nullable();
            $table->text('nombre')->nullable();
            $table->text('address')->nullable();
            $table->text('city')->nullable();
            $table->text('zipcode')->nullable();
            $table->text('contacname')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('webpage')->nullable();
            $table->integer('breakfast')->nullable();
            $table->integer('resoftfe')->nullable();
            $table->text('latitud')->nullable();
            $table->text('longitud')->nullable();
            $table->double('tax', 10, 2)->nullable();
            $table->double('stoproft', 10, 2)->nullable();
            $table->double('maximo', 10, 2)->nullable();
            $table->text('description')->nullable();
            $table->text('image1')->nullable();
            $table->text('image2')->nullable();
            $table->text('image3')->nullable();
            $table->text('image4')->nullable();
            $table->boolean('estado')->default(true);
            $table->boolean('super_breakfast')->default(false);
            $table->integer('orden')->default(999);
            $table->tinyInteger('type_web')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoteles');
    }
};
