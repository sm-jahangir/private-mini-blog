<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('image1');
            $table->string('category_name1');
            $table->string('post_link1');

            $table->string('title2');
            $table->string('image2');
            $table->string('category_name2');
            $table->string('post_link2');

            $table->string('title3');
            $table->string('image3');
            $table->string('category_name3');
            $table->string('post_link3');
            
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
        Schema::dropIfExists('sliders');
    }
}
