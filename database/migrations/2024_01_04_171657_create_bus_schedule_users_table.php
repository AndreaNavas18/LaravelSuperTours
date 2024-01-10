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
        Schema::create('bus_schedule_users', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('role_id');
            $table->string('email')->nullable();
            $table->binary('password')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->dateTime('created');
            $table->dateTime('last_login')->nullable();
            $table->enum('status', ['T', 'F'])->default('T');
            $table->enum('is_active', ['T', 'F'])->default('F');
            $table->string('ip', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_users');
    }
};
