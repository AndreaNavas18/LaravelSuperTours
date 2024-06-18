<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usersn', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->nullable();
            $table->text('firstname')->nullable();
            $table->text('lastname')->nullable();
            $table->string('password')->nullable();
            $table->text('phone')->nullable();
            $table->string('celphone')->unique();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->text('country')->nullable();
            $table->text('address')->nullable();
            $table->text('zip')->nullable();
            $table->boolean('tipo_client')->nullable()->default(0);
            $table->text('birthday')->nullable();
            $table->text('fecha_r')->nullable();
            $table->double('points')->default(0);
            $table->double('left_points')->default(0);
            $table->double('paid_points')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usersn');
    }
};
