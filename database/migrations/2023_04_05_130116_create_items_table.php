<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('image', 30)->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('category_ids')->nullable();
            $table->text('variations')->nullable();
            $table->string('add_ons')->nullable();
            $table->string('attributes')->nullable();
            $table->text('choice_options')->nullable();
            $table->decimal('price', 24, 2)->default(0.00);
            $table->decimal('tax', 24, 2)->default(0.00);
            $table->string('tax_type', 20)->default('percent');
            $table->decimal('discount', 24, 2)->default(0.00);
            $table->string('discount_type', 20)->default('percent');
            $table->time('available_time_starts')->nullable();
            $table->time('available_time_ends')->nullable();
            $table->boolean('veg')->default(0);
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('store_id');
            $table->timestamps();
            $table->integer('order_count')->default(0);
            $table->double('avg_rating', 16, 14)->default(0.00000000000000);
            $table->integer('rating_count')->default(0);
            $table->string('rating')->nullable();
            $table->unsignedBigInteger('module_id');
            $table->integer('stock')->default(0);
            $table->unsignedBigInteger('unit_id')->nullable();
            $table->longText('images')->nullable();
            $table->text('food_variations')->nullable();
            
            $table->foreign('module_id', 'items_module_id_foreign')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
