<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->uuidMorphs('transaction');
            $table->decimal('credit', 24, 3)->default(0.000);
            $table->decimal('debit', 24, 3)->default(0.000);
            $table->decimal('admin_bonus', 24, 3)->default(0.000);
            $table->decimal('balance', 24, 3)->default(0.000);
            $table->string('reference', 191)->nullable();
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
        Schema::dropIfExists('wallet_transactions');
    }
}
