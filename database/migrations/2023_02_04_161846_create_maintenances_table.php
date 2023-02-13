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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('maintenance_price', 10, 2);
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('workshop_services')->onDelete('cascade');
            $table->unsignedBigInteger('car_workshop_id');
            $table->foreign('car_workshop_id')->references('id')->on('car_workshops')->onDelete('cascade');
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
        Schema::dropIfExists('maintenances');
    }
};
