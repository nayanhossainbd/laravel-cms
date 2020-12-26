<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use App\Models\City;
use App\Models\ContactMessage;
use DB;

use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{
    public function district($id)
    {
        $districts = City::where("country_id",$id)->pluck("name","id");
    return response()->json($districts);
    }
    public function thana($id)
    {
        $thanas = DB::table("upazilas")->where("district_id",$id)
                ->pluck("name","id");
    return response()->json($thanas);
    }
    public function contactshow($dat)
    {
        $contact=ContactMessage::where('id',$dat)->first();
      return view('admin.contactShow',compact('contact'));
    }
}