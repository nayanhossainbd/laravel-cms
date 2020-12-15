<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentPostContentTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_post_content_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('content_post_id');
            $table->foreign('content_post_id', 'content_post_id_fk_2612172')->references('id')->on('content_posts')->onDelete('cascade');
            $table->unsignedBigInteger('content_tag_id');
            $table->foreign('content_tag_id', 'content_tag_id_fk_2612172')->references('id')->on('content_tags')->onDelete('cascade');
        });
    }
}