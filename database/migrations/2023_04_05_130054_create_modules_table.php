<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('module_name', 191);
            $table->string('module_type', 191);
            $table->string('thumbnail')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('stores_count')->default(0);
            $table->timestamps();
            $table->string('icon', 191)->nullable();
            $table->integer('theme_id')->default(1);
            $table->text('description')->nullable();
            $table->boolean('all_zone_service')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
