<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id')->nullable();
            $table->unsignedBigInteger('delivery_man_id')->nullable();
            $table->unsignedBigInteger('order_id');
            $table->decimal('order_amount', 24, 2);
            $table->decimal('store_amount', 24, 2)->default(0.00);
            $table->decimal('admin_commission', 24, 2);
            $table->string('received_by');
            $table->string('status')->nullable();
            $table->timestamps();
            $table->decimal('delivery_charge', 24, 2)->default(0.00);
            $table->decimal('original_delivery_charge', 24, 2)->default(0.00);
            $table->decimal('tax', 24, 2)->default(0.00);
            $table->unsignedBigInteger('zone_id')->nullable()->index('order_transactions_zone_id_index');
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('parcel_catgory_id')->nullable();
            $table->double('dm_tips', 24, 2)->default(0.00);
            $table->double('delivery_fee_comission', 24, 2)->default(0.00);
            $table->decimal('admin_expense', 23, 3)->default(0.000);
            
            $table->foreign('module_id', 'order_transactions_module_id_foreign')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_transactions');
    }
}
