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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->date('trip_date');
            $table->string('trip_code');
            $table->integer('ini_odometer');
            $table->integer('end_odometer');
            $table->decimal('liter_price', 10, 2);
            $table->decimal('total_expense', 10, 2);
            $table->decimal('total_price', 10, 2);
            $table->unsignedBigInteger('fuel_type_id');
            $table->foreign('fuel_type_id')->references('id')->on('fuel_types')->onDelete('cascade');
            $table->unsignedBigInteger('automobile_id');
            $table->foreign('automobile_id')->references('id')->on('automobiles')->onDelete('cascade');
            $table->unsignedBigInteger('created_by_user_id');
            $table->foreign('created_by_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('route_id');
            $table->foreign('route_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('trips');
    }
};
