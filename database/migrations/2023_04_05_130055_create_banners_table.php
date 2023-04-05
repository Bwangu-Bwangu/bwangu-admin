<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->string('image')->nullable();
            $table->boolean('status')->default(1);
            $table->string('data');
            $table->timestamps();
            $table->unsignedBigInteger('zone_id');
            $table->unsignedBigInteger('module_id');
            $table->boolean('featured')->default(0);
            $table->string('default_link')->nullable();
            
            $table->foreign('module_id', 'banners_module_id_foreign')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
