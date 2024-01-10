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
        Schema::create('debito', function (Blueprint $table) {
            $table->integer('id');
            $table->text('fecha')->nullable();
            $table->double('cantidad', 10, 2)->nullable();
            $table->text('referepago')->nullable();
            $table->text('anexo')->nullable();
            $table->integer('id_agency_account')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('debito');
    }
};
