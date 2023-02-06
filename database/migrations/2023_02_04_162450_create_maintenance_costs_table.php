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
        Schema::create('maintenance_costs', function (Blueprint $table) {
            $table->id();
            $table->integer('cleaning');
            $table->integer('accessories');
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
        Schema::dropIfExists('maintenance_costs');
    }
};
