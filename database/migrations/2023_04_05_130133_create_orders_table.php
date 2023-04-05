<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->decimal('order_amount', 24, 2)->default(0.00);
            $table->decimal('coupon_discount_amount', 24, 2)->default(0.00);
            $table->string('coupon_discount_title')->nullable();
            $table->string('payment_status')->default('unpaid');
            $table->string('order_status')->default('pending');
            $table->decimal('total_tax_amount', 24, 2)->default(0.00);
            $table->string('payment_method', 30)->nullable();
            $table->string('transaction_reference', 30)->nullable();
            $table->bigInteger('delivery_address_id')->nullable();
            $table->unsignedBigInteger('delivery_man_id')->nullable();
            $table->string('coupon_code')->nullable();
            $table->text('order_note')->nullable();
            $table->string('order_type')->default('delivery');
            $table->boolean('checked')->default(0);
            $table->unsignedBigInteger('store_id')->nullable();
            $table->timestamps();
            $table->decimal('delivery_charge', 24, 2)->default(0.00);
            $table->timestamp('schedule_at')->nullable();
            $table->string('callback')->nullable();
            $table->string('otp')->nullable();
            $table->timestamp('pending')->nullable();
            $table->timestamp('accepted')->nullable();
            $table->timestamp('confirmed')->nullable();
            $table->timestamp('processing')->nullable();
            $table->timestamp('handover')->nullable();
            $table->timestamp('picked_up')->nullable();
            $table->timestamp('delivered')->nullable();
            $table->timestamp('canceled')->nullable();
            $table->timestamp('refund_requested')->nullable();
            $table->timestamp('refunded')->nullable();
            $table->text('delivery_address')->nullable();
            $table->boolean('scheduled')->default(0);
            $table->decimal('store_discount_amount', 24, 2)->default(0.00);
            $table->decimal('original_delivery_charge', 24, 2)->default(0.00);
            $table->timestamp('failed')->nullable();
            $table->decimal('adjusment', 24, 2)->default(0.00);
            $table->boolean('edited')->default(0);
            $table->string('delivery_time')->nullable();
            $table->unsignedBigInteger('zone_id')->nullable()->index('zone_id');
            $table->unsignedBigInteger('module_id');
            $table->string('order_attachment', 191)->nullable();
            $table->unsignedBigInteger('parcel_category_id')->nullable();
            $table->longText('receiver_details')->nullable();
            $table->enum('charge_payer', ['sender', 'receiver'])->nullable();
            $table->double('distance', 16, 3)->default(0.000);
            $table->double('dm_tips', 24, 2)->default(0.00);
            $table->string('free_delivery_by')->nullable();
            $table->timestamp('refund_request_canceled')->nullable();
            $table->boolean('prescription_order')->default(0);
            
            $table->foreign('module_id', 'orders_module_id_foreign')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
