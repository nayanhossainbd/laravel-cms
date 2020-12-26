<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Auth;
use App\Models\ContentPost;
use App\Models\Product;
use App\Models\ContentCategory;
use App\Models\ContactMessage;
class HomeController
{
    public function index()
    {

$settings1 = [
            'chart_title'           => 'Recent Users',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\User',
            'group_by_field'        => 'email_verified_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'week',
            'group_by_field_format' => 'Y-m-d H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '10',
            'fields'                => [
                'id'         => '',
                'name'       => '',
                'roles'      => 'title',
                'created_at' => '',
            ],
        ];

        $settings1['data'] = [];

        if (class_exists($settings1['model'])) {
            $settings1['data'] = $settings1['model']::latest()
                ->take($settings1['entries_number'])
                ->get();
        }

        if (!array_key_exists('fields', $settings1)) {
            $settings1['fields'] = [];
        }

        $settings2 = [
            'chart_title'           => 'Last Contact',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\ContactMessage',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'week',
            'group_by_field_format' => 'Y-m-d H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '10',
            'fields'                => [
                'id'              => '',
                'name'    => '',
                'email' => '',
                'subject' => '',
                'message'   => '',
            ],
        ];

        $settings2['data'] = [];

        if (class_exists($settings2['model'])) {
            $settings2['data'] = $settings2['model']::latest()
                ->take($settings2['entries_number'])
                ->get();
        }

        if (!array_key_exists('fields', $settings2)) {
            $settings2['fields'] = [];
        }



      $users=Auth::user()->all();
      $posts=ContentPost::all();
      $categories=ContentCategory::all();
      $products=Product::all();
      $contacts=ContactMessage::latest()->get();
        return view('home', compact('users','posts','products','categories','settings2','settings1','contacts'));
    }
}