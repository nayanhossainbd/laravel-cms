<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('iso3');
            $table->string('iso2');
            $table->string('phone_code');
            $table->string('capital');
            $table->string('currency');
            $table->string('native');
            $table->string('region');
            $table->string('subregion');
            $table->string('timezones');
            $table->string('emoji');
            $table->string('emojiU');
           
            $table->timestamps();
            $table->softDeletes();
        });
    }
}