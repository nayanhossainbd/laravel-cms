<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contact_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            // $table->string('contact_last_name')->nullable();
            $table->integer('company_id')->nullable();
            $table->string('contact_phone_1')->nullable();
            $table->string('contact_phone_2')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_skype')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('designation')->nullable();
            $table->string('email_office_personal')->nullable();
            $table->string('email_personal')->nullable();
            $table->string('telephone')->nullable();
            $table->string('persona_age')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}