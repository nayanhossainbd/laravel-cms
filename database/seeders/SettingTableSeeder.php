<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    public function run()
    {
        $setting = [
            [
                'id'    => 1,
                'name' => 'AR IT CMS ',
                'address' => '159/a Shantinogor Dhaka-1217 ',
                'description' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts ',
                'type' => 'Software Company ',
                'phone_no' => '+8801704458206 ',
                'email' => 'it@aritfirm.com ',
                'facebook' => 'it@aritfirm.com ',
                'twitter' => 'it@aritfirm.com ',
                'linkedin' => 'it@aritfirm.com ',
                'whatsapp' => 'it@aritfirm.com ',
            ],
           
        ];

        Setting::insert($setting);
    }
}