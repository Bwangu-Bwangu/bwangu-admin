<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryManWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_man_wallets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('delivery_man_id');
            $table->decimal('collected_cash', 24, 2)->default(0.00);
            $table->timestamps();
            $table->decimal('total_earning', 24, 2)->default(0.00);
            $table->decimal('total_withdrawn', 24, 2)->default(0.00);
            $table->decimal('pending_withdraw', 24, 2)->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_man_wallets');
    }
}
