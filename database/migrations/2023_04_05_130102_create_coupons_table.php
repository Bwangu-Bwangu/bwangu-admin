<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('title', 191)->nullable();
            $table->string('code', 100)->nullable()->unique('coupons_code_unique');
            $table->date('start_date')->nullable();
            $table->date('expire_date')->nullable();
            $table->decimal('min_purchase', 24, 2)->default(0.00);
            $table->decimal('max_discount', 24, 2)->default(0.00);
            $table->decimal('discount', 24, 2)->default(0.00);
            $table->string('discount_type', 15)->default('percentage');
            $table->string('coupon_type')->default('default');
            $table->integer('limit')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->string('data')->nullable();
            $table->bigInteger('total_uses')->default(0);
            $table->unsignedBigInteger('module_id');
            
            $table->foreign('module_id', 'coupons_module_id_foreign')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
