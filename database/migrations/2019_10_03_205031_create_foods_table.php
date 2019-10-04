<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->string('food_image');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('category_id');
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
//            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('foods');
    }
}
