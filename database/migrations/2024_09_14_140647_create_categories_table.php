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
            $table->string('name');
            $table->string('slug');
            $table->mediumText('description');
            $table->string('cat_image');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->text('meta_keyword');
            $table->tinyInteger('navbar_status')->default('0');
            $table->tinyInteger('navbar_footer')->default('0');
            $table->tinyInteger('navbar_sidebar')->default('0');
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
        Schema::dropIfExists('categories');
    }
}
