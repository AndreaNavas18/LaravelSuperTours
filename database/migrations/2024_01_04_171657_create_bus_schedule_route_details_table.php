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
        Schema::create('bus_schedule_route_details', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('route_id')->nullable();
            $table->integer('from_location_id')->nullable();
            $table->integer('to_location_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_route_details');
    }
};
