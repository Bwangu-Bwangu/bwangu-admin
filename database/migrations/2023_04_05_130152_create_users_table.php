<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('f_name', 100)->nullable();
            $table->string('l_name', 100)->nullable();
            $table->string('phone', 20)->unique('users_phone_unique');
            $table->string('email', 100)->nullable();
            $table->string('image', 100)->nullable();
            $table->boolean('is_phone_verified')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 100);
            $table->rememberToken();
            $table->timestamps();
            $table->string('interest')->nullable();
            $table->string('cm_firebase_token')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('order_count')->default(0);
            $table->string('login_medium')->nullable();
            $table->string('social_id')->nullable();
            $table->unsignedBigInteger('zone_id')->nullable()->index('users_zone_id_index');
            $table->decimal('wallet_balance', 24, 3)->default(0.000);
            $table->decimal('loyalty_point', 24, 3)->default(0.000);
            $table->string('ref_code', 10)->nullable()->unique('users_ref_code_unique');
            $table->string('current_language_key')->default('en');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
