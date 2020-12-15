<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    public function run()
    {
        $countries = [
     [
        'id'=> 19,
        "name"=> "Bangladesh",
        "iso3"=> "BGD",
        "iso2"=> "BD",
        "phone_code"=> "88",
        "capital"=> "Dhaka",
        "currency"=> "TAKA",
        "native"=> "Bangla",
        "region"=> "Asia",
        "subregion"=> "Southern Asia",
        "timezones"=> "Asia\/Kabul",
        "emoji"=> "🇦🇫",
        "emojiU"=> "U+1F1E6 U+1F1EB"
    ],
    ];

        Country::insert($countries);
    }
}