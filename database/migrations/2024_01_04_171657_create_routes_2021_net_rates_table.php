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
        Schema::create('routes_2021_net_rates', function (Blueprint $table) {
            $table->integer('id');
            $table->string('trip_from', 40);
            $table->string('trip_to', 40);
            $table->char('trip_no', 4);
            $table->double('price', 10, 2);
            $table->double('price2', 10, 2);
            $table->double('price3', 10, 2);
            $table->double('price4', 10, 2);
            $table->string('trip_departure', 8);
            $table->string('trip_arrival', 8);
            $table->char('anno', 4);
            $table->integer('type_rate')->default(2);
            $table->integer('id_agency')->default(-1);
            $table->date('fecha_ini')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->double('prcnet_adult', 10, 2);
            $table->double('prcnet_child', 10, 2);
            $table->double('prcweb_adult', 10, 2);
            $table->double('prcweb_child', 10, 2);
            $table->double('univext', 10, 2);
            $table->double('wdext', 10, 2);
            $table->double('f1t3', 10, 2);
            $table->double('f1t4', 10, 2);
            $table->double('f1t5', 10, 2);
            $table->double('f1t6', 10, 2);
            $table->double('f1t7', 10, 2);
            $table->double('f1t8', 10, 2);
            $table->double('f1t9', 10, 2);
            $table->double('f1t10', 10, 2);
            $table->double('f1t19', 10, 2);
            $table->double('f1t11', 10, 2);
            $table->double('f1t12', 10, 2);
            $table->double('f1t13', 10, 2);
            $table->double('f1t14', 10, 2);
            $table->double('f2t3', 10, 2);
            $table->double('f2t4', 10, 2);
            $table->double('f2t5', 10, 2);
            $table->double('f2t6', 10, 2);
            $table->double('f2t7', 10, 2);
            $table->double('f2t8', 10, 2);
            $table->double('f2t9', 10, 2);
            $table->double('f2t10', 10, 2);
            $table->double('f2t19', 10, 2);
            $table->double('f2t11', 10, 2);
            $table->double('f2t12', 10, 2);
            $table->double('f2t13', 10, 2);
            $table->double('f2t14', 10, 2);
            $table->double('f3t4', 10, 2);
            $table->double('f3t5', 10, 2);
            $table->double('f3t6', 10, 2);
            $table->double('f3t7', 10, 2);
            $table->double('f3t8', 10, 2);
            $table->double('f3t9', 10, 2);
            $table->double('f3t10', 10, 2);
            $table->double('f3t19', 10, 2);
            $table->double('f3t11', 10, 2);
            $table->double('f3t12', 10, 2);
            $table->double('f3t13', 10, 2);
            $table->double('f3t14', 10, 2);
            $table->double('f4t5', 10, 2);
            $table->double('f4t6', 10, 2);
            $table->double('f4t7', 10, 2);
            $table->double('f4t8', 10, 2);
            $table->double('f4t9', 10, 2);
            $table->double('f4t10', 10, 2);
            $table->double('f4t19', 10, 2);
            $table->double('f4t11', 10, 2);
            $table->double('f4t12', 10, 2);
            $table->double('f4t13', 10, 2);
            $table->double('f4t14', 10, 2);
            $table->double('f5t6', 10, 2);
            $table->double('f5t7', 10, 2);
            $table->double('f5t8', 10, 2);
            $table->double('f5t9', 10, 2);
            $table->double('f5t10', 10, 2);
            $table->double('f5t19', 10, 2);
            $table->double('f5t11', 10, 2);
            $table->double('f5t12', 10, 2);
            $table->double('f5t13', 10, 2);
            $table->double('f5t14', 10, 2);
            $table->integer('spt');
            $table->text('special_price_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes_2021_net_rates');
    }
};
