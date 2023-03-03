<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosts extends Migration
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
            $table->unsignedBigInteger('cate_id');
            $table->integer('user_id')->nullable();
            $table->string('name');
            $table->tinytext('slug')->unique();
            $table->tinytext('meta_title')->nullable();
            $table->tinytext('meta_desc')->nullable();
            $table->string('image_alt',400)->nullable();
            $table->string('short_desc', 400)->nullable();
            $table->longtext('long_desc')->nullable();
            $table->string('post_image')->nullable();
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
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
