<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Page;
use App\Models\ContentCategory;
use App\Models\ContentTag;
use App\Models\ContentPost;
use App\Models\ContactMessage;
use App\Models\Comment;
use Symfony\Component\HttpFoundation\Response;
class WebsiteController extends Controller
{
    public function index()
    {
        
        $menus = Menu::whereNull('menu_id')
        ->with('childrenMenus')
        ->get();
        $categories=ContentCategory::all();
        $posts=ContentPost::latest()->paginate();
        return view('websites.home', compact('menus','posts','categories'));
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
        $comments=Comment::where('parent_id',$data->id)->latest()->get();
        return view('websites.post_details', compact('data','categories','tags','latests','comments'));
       }
       return abort(Response::HTTP_NOT_FOUND, '404 Not Found!');
    }
    public function category($slug)
    {
      
    //    $data=ContentCategory::where('slug',$title)->first();
         $datas=ContentCategory::where('slug',$slug)->get();
      
        return view('websites.category', compact('datas'));
    }
    public function page($slug)
    {
        
        $page_slug=Page::where('slug',$slug)->first();
    //    dd($page_slug);
        $pages=Page::all();
        $categories=ContentCategory::all();
        $posts=ContentPost::latest()->paginate();
            if($slug == 'home'){
                return view('websites.home', compact('posts','page_slug','categories'));
            }
            if($slug == 'posts'){
                return view('websites.posts', compact('posts','page_slug','categories'));
            }
            if($slug == 'contact'){
                return view('websites.contact', compact('posts','page_slug','categories'));
            }
            if($page_slug->template == 'home'){
                return view('websites.home', compact('posts','page_slug','categories'));
            }elseif($page_slug->template == 'about'){
                return view('websites.about', compact('posts','page_slug','categories'));
            }elseif($page_slug->template == 'service'){
                return view('websites.service', compact('posts','page_slug','categories'));
            }elseif($page_slug->template == 'contact'){
                return view('websites.contact', compact('posts','page_slug','categories'));
            }
            elseif($page_slug->template == 'posts'){
                return view('websites.posts', compact('posts','page_slug','categories'));
            }
            elseif($page_slug->template == 'blank'){
                return view('websites.page', compact('posts','page_slug','categories'));
            }
            else{
                return view('websites.posts', compact('posts','page_slug','categories'));;
            }
    
       
        
     
       return abort(Response::HTTP_NOT_FOUND, '404 Not Found!');
    }

    public function contact_message(Request $request)
   {
    $contact = ContactMessage::create($request->all());

    return redirect()->back()->with('message', __('global.contact_success'));
   }
   
}