<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique('zones_name_unique');
            $table->polygon('coordinates');
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->string('store_wise_topic')->nullable();
            $table->string('customer_wise_topic')->nullable();
            $table->string('deliveryman_wise_topic')->nullable();
            $table->boolean('cash_on_delivery')->default(0);
            $table->boolean('digital_payment')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zones');
    }
}
