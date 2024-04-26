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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->text('firstname')->nullable();
            $table->text('lastname')->nullable();
            $table->string('password');
            $table->text('phone')->nullable();
            $table->text('celphone')->nullable();
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
        Schema::dropIfExists('users');
    }
};
