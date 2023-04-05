<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
            $table->string('image')->default('def.png');
            $table->integer('parent_id');
            $table->integer('position');
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->integer('priority')->default(0);
            $table->unsignedBigInteger('module_id');
            
            $table->foreign('module_id', 'categories_module_id_foreign')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
