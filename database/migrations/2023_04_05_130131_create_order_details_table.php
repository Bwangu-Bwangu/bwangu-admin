<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->decimal('price', 24, 2)->default(0.00);
            $table->text('item_details')->nullable();
            $table->text('variation')->nullable();
            $table->text('add_ons')->nullable();
            $table->decimal('discount_on_item', 24, 2)->nullable();
            $table->string('discount_type', 20)->default('amount');
            $table->integer('quantity')->default(1);
            $table->decimal('tax_amount', 24, 2)->default(1.00);
            $table->string('variant')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('item_campaign_id')->nullable();
            $table->decimal('total_add_on_price', 24, 2)->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
