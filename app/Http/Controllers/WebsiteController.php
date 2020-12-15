<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\ContentCategory;
use App\Models\ContentTag;
use App\Models\ContentPost;
use Symfony\Component\HttpFoundation\Response;
class WebsiteController extends Controller
{
    public function index()
    {
        
        $menus = Menu::whereNull('menu_id')
        ->with('childrenMenus')
        ->get();
        $categories=ContentCategory::all();
        $pages=ContentPost::all();
        return view('websites.home', compact('menus','pages','categories'));
    }
    public function post($slug)
    { 
        $title=base64_decode($slug);
        $data=ContentPost::where('title',$title)->first();
       if($data != NULL){
        $title=base64_decode($slug);
        $categories=ContentCategory::latest()->get();
        $tags=ContentTag::latest()->get();
        $latests=ContentPost::latest()->take(5)->get();
        $data=ContentPost::where('title',$title)->first();
      
        return view('websites.post_details', compact('data','categories','tags','latests'));
       }
       return abort(Response::HTTP_NOT_FOUND, '404 Not Found!');
    }
    public function category($slug)
    {
      
    //    $data=ContentCategory::where('slug',$title)->first();
         $datas=ContentCategory::where('slug',$slug)->get();
      
        return view('websites.category', compact('datas'));
    }
    public function menu($slug)
    {
        
       
        $menus = Menu::whereNull('menu_id')
        ->with('childrenMenus')
        ->get();
        $categories=ContentCategory::all();
        $posts=ContentPost::all();
        return view('websites.home', compact('menus','posts','categories'));
     
    //    return abort(Response::HTTP_NOT_FOUND, '404 Not Found!');
    }

   public function posts(){
       $posts=ContentPost::all();
       return view('websites.posts',compact('posts'));
   }
}