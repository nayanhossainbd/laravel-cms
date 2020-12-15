<?php

namespace Database\Seeders;

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2020-11-18 05:27:09',
                'updated_at' => '2020-11-18 05:27:09',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2020-11-18 05:27:09',
                'updated_at' => '2020-11-18 05:27:09',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2020-11-18 05:27:09',
                'updated_at' => '2020-11-18 05:27:09',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}