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
        Schema::create('bus_schedule_plugin_country', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('alpha_2', 2)->nullable();
            $table->string('alpha_3', 3)->nullable();
            $table->enum('status', ['T', 'F'])->default('T');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_plugin_country');
    }
};
