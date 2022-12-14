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
//            $table->increments('id');
//            $table->unsignedInteger('parent_id')->nullable();
//            $table->string('name');
//            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
//            $table->timestamps();
            $table->increments('id');
            $table->integer('parent_id')->nullable()->default(null);
            $table->string('name');
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
        Schema::dropIfExists('categories');
    }
}
