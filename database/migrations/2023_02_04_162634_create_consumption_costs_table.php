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
        Schema::create('consumption_costs', function (Blueprint $table) {
            $table->id();
            $table->integer('kt_qm_per_liter');
            $table->integer('qt_tires');
            $table->integer('vl_tire_unit');
            $table->integer('tire_life');
            $table->unsignedBigInteger('automobile_cost_id');
            $table->foreign('automobile_cost_id')->references('id')->on('automobile_costs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consumption_costs');
    }
};
