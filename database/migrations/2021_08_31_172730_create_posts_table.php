<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('excerpt');
            $table->longText('body');
            $table->string('image')->default('default.png');
            $table->boolean('status')->default(true);
            $table->boolean('featured')->default(false);
            $table->boolean('trending')->default(false);
            $table->boolean('popular')->default(false);
            $table->string('format')->default('default');
            $table->string('tags');
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
        Schema::dropIfExists('posts');
    }
}
