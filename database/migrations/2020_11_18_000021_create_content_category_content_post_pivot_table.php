<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentCategoryContentPostPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_category_content_post', function (Blueprint $table) {
            $table->unsignedBigInteger('content_post_id');
            $table->foreign('content_post_id', 'content_post_id_fk_2612171')->references('id')->on('content_posts')->onDelete('cascade');
            $table->unsignedBigInteger('content_category_id');
            $table->foreign('content_category_id', 'content_category_id_fk_2612171')->references('id')->on('content_categories')->onDelete('cascade');
        });
    }
}