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
        Schema::create('bus_schedule_bus_types', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('seats_map')->nullable();
            $table->integer('seats_count')->nullable();
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
        Schema::dropIfExists('bus_schedule_bus_types');
    }
};
