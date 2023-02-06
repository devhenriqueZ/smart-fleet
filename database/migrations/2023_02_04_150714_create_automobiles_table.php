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
        Schema::create('automobiles', function (Blueprint $table) {
            $table->id();
            $table->string('license_plate');
            $table->string('brand');
            $table->string('model');
            $table->string('chassis');
            $table->string('renavam');
            $table->integer('yy_manufacture');
            $table->integer('yy_model');
            $table->integer('color');
            $table->integer('motor');
            $table->integer('power');
            $table->text('observations');
            $table->unsignedBigInteger('automobile_type');
            $table->foreign('automobile_type')->references('id')->on('automobile_types')->onDelete('cascade');
            $table->unsignedBigInteger('fuel_type');
            $table->foreign('fuel_type')->references('id')->on('fuel_types')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('automobiles');
    }
};
