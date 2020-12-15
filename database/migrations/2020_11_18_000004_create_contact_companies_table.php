<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('contact_companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name')->nullable()->unique();
            $table->string('company_address')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_email')->nullable();
            $table->string('head_office')->nullable();
            $table->string('factory')->nullable();
            $table->string('thana')->nullable();
            $table->string('district')->nullable();
            $table->string('country')->nullable();
            $table->string('type')->nullable();
            $table->string('facbook')->nullable();
            $table->string('source')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}