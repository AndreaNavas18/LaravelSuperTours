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
        Schema::create('bus_schedule_multi_lang', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('foreign_id')->nullable();
            $table->string('model', 50)->nullable();
            $table->unsignedTinyInteger('locale')->nullable();
            $table->string('field', 50)->nullable();
            $table->text('content')->nullable();
            $table->enum('source', ['script', 'plugin', 'data'])->nullable()->default('script');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_multi_lang');
    }
};
