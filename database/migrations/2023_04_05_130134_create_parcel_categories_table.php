<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_categories', function (Blueprint $table) {
            $table->id();
            $table->string('image', 191)->nullable();
            $table->string('name', 191)->unique('parcel_categories_name_unique');
            $table->text('description');
            $table->boolean('status')->default(1);
            $table->integer('orders_count')->default(0);
            $table->unsignedBigInteger('module_id');
            $table->timestamps();
            $table->double('parcel_per_km_shipping_charge', 23, 2)->nullable();
            $table->double('parcel_minimum_shipping_charge', 23, 2)->nullable();
            
            $table->foreign('module_id', 'parcel_categories_module_id_foreign')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcel_categories');
    }
}
