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
        Schema::create('extension', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_area')->nullable();
            $table->text('place')->nullable();
            $table->text('address')->nullable();
            $table->text('precio')->nullable();
            $table->double('precio_neto');
            $table->double('precio_especial', 10, 2)->nullable();
            $table->integer('valid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extension');
    }
};
