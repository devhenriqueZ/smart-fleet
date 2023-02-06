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
        Schema::create('physical_characteristics', function (Blueprint $table) {
            $table->id();
            $table->integer('tare');
            $table->integer('capacity');
            $table->integer('total_gross_weight');
            $table->integer('height');
            $table->integer('width');
            $table->integer('lenght');
            $table->unsignedBigInteger('load_model_id');
            $table->foreign('load_model_id')->references('id')->on('load_models')->onDelete('cascade');
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
        Schema::dropIfExists('physical_characteristics');
    }
};
