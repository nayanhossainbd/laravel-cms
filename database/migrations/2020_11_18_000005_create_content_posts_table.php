<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentPostsTable extends Migration
{
    public function up()
    {
        Schema::create('content_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('author_id');
            $table->string('title')->nullable();
            $table->longText('page_text')->nullable();
            $table->longText('excerpt')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}