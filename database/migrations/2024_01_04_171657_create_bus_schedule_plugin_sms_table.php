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
        Schema::create('bus_schedule_plugin_sms', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('number')->nullable();
            $table->string('text')->nullable();
            $table->string('status')->nullable();
            $table->dateTime('created')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_plugin_sms');
    }
};
