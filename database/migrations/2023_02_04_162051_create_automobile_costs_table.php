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
        Schema::create('automobile_costs', function (Blueprint $table) {
            $table->id();
            $table->decimal('vl_automobile', 10, 2);
            $table->integer('estimated_mileage');
            $table->unsignedBigInteger('automobile_id');
            $table->foreign('automobile_id')->references('id')->on('automobiles')->onDelete('cascade');
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
        Schema::dropIfExists('automobile_costs');
    }
};
