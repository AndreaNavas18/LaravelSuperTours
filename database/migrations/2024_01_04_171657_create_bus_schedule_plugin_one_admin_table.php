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
        Schema::create('bus_schedule_plugin_one_admin', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('name')->nullable();
            $table->string('url')->nullable();
            $table->string('email')->nullable();
            $table->binary('password')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_plugin_one_admin');
    }
};
