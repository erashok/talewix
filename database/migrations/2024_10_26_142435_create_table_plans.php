<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_plans', function (Blueprint $table) {
            $table->id();
            $table->string('heading_name')->nullable();
            $table->string('price_name')->nullable();
            $table->string('month_years')->nullable();
            $table->text('plan_desc')->nullable();
            $table->string('tag_name')->nullable();
            $table->string('about_heading')->nullable();
            $table->text('about_desc')->nullable();
            $table->string('plan_image')->nullable();
            $table->unsignedBigInteger('created_by')->nullable(); // Add this line
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
        Schema::table('table_plans', function (Blueprint $table) {
            $table->dropColumn('created_by');
        });
    }
}
