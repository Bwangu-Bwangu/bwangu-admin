<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 20)->unique('restaurants_phone_unique');
            $table->string('email', 100)->nullable();
            $table->string('logo')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->text('address')->nullable();
            $table->text('footer_text')->nullable();
            $table->decimal('minimum_order', 24, 2)->default(0.00);
            $table->decimal('comission', 24, 2)->nullable();
            $table->boolean('schedule_order')->default(0);
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('vendor_id');
            $table->timestamps();
            $table->boolean('free_delivery')->default(0);
            $table->string('rating')->nullable();
            $table->string('cover_photo')->nullable();
            $table->boolean('delivery')->default(1);
            $table->boolean('take_away')->default(1);
            $table->boolean('item_section')->default(1);
            $table->decimal('tax', 24, 2)->default(0.00);
            $table->unsignedBigInteger('zone_id')->nullable();
            $table->boolean('reviews_section')->default(1);
            $table->boolean('active')->default(1);
            $table->string('off_day', 191)->default(' ');
            $table->string('gst', 191)->nullable();
            $table->boolean('self_delivery_system')->default(0);
            $table->boolean('pos_system')->default(0);
            $table->decimal('minimum_shipping_charge', 24, 2)->default(0.00);
            $table->string('delivery_time', 100)->default('30-40');
            $table->boolean('veg')->default(1);
            $table->boolean('non_veg')->default(1);
            $table->unsignedInteger('order_count')->default(0);
            $table->unsignedInteger('total_order')->default(0);
            $table->unsignedBigInteger('module_id');
            $table->integer('order_place_to_schedule_interval')->default(0);
            $table->boolean('featured')->default(0);
            $table->double('per_km_shipping_charge', 16, 3)->unsigned()->default(0.000);
            $table->boolean('prescription_order')->default(0);
            
            $table->foreign('module_id', 'stores_module_id_foreign')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
