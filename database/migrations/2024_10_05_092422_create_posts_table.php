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
            $table->integer('category_id');
            $table->string('name');
            $table->string('slug');
            $table->mediumText('short_description');
            $table->mediumText('description');
            $table->string('tags')->nullable();
            $table->mediumText('yt_frame')->nullable();
            $table->string('thum_image')->nullable();
            $table->string('meta_title');
            $table->mediumText('meta_description')->nullable();
            $table->mediumText('meta_keyword')->nullable();
            $table->tinyInteger('right_sidebar')->default('0');
            $table->tinyInteger('ads_main')->default('0');
            $table->tinyInteger('ads_sidebar')->default('0');
            $table->string('status')->default('0');
            $table->integer('created_by');
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
