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
        Schema::create('opciones', function (Blueprint $table) {
            $table->decimal('codigo', 10, 0);
            $table->string('menuitem_es', 60);
            $table->string('menuitem_en', 60);
            $table->string('depende', 5);
            $table->char('submenu', 1);
            $table->string('url', 100);
            $table->string('quicklink', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opciones');
    }
};
