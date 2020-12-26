@extends('websites.layouts.master')
@section('banner')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('website/images/bg_1.jpg') }}');"
data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Blog Single</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                            class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                        href="{{ url('posts') }}">Blogs <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single
                    <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
    </div>
</div>
</section>
@endsection
@section('content')


<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p class="mb-5">
                    @if($data->featured_image)
                    <img class="img-fluid" src="{{ $data->featured_image->getUrl() }}">
                  
                    @endif
                  
                </p>
                <h2 class="mb-3">{{ $data->title }}</h2>
                {!! $data->page_text !!}
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                      
                        @foreach ( $data->tags as $tag)
                        <a href="{{  $tag->slug }}" class="tag-cloud-link">{{  $tag->name }}</a>
                        @endforeach
                        
                    </div>
                </div>
                
                <div class="pt-5 mt-5">
                    <h3 class="mb-5">@if ($comments !=Null)
                        @if (count($comments) == 1)
                        {{count($comments)}} Comment
                        @else 
                        {{count($comments)}} Comments
                        @endif
                      
                       @else 
                       No Comment Yet .
                    @endif</h3>
                    <ul class="comment-list">
                        @foreach ($comments as $comment)
                        <li class="comment">
                            
                            <div class="comment-body">
                                <h3>{{ $comment->name }}</h3>
                                <div class="meta mb-3"> {{ $comment ->created_at->isoFormat('LLLL')}}</div>
                                <p>{{$comment->comment}}</p>
                                {{-- <p><a href="#" class="reply">Reply</a></p> --}}
                            </div>
                        </li>
                        @endforeach
                       
                    </ul>
                    <!-- END comment-list -->
                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        
                        <form  class="p-5 bg-light"  method="post" action="{{ url('comment/add') }}">
                            @csrf
                            <input type="hidden" name="parent_id" value="{{ $data->id }}">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                          
                            <div class="form-group">
                                <label for="message">Comment *</label>
                                <textarea id="message" cols="30" name="comment" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn py-3 px-4 btn-primary">Submit</button>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon icon-search"></span>
                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>

                        @foreach ($categories as $category)
                            @foreach ($data->categories as $item)
                            <li class="{{ ($category->name == $item->name)? 'active':''}}"><a href="{{ url('category/'.$category->slug) }}">{{ $category->name }}<span class="ion-ios-arrow-forward"></span></a></li> 
                           
                            @endforeach
                                        
                            @endforeach
                      
                    </div>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3>Recent Blog</h3>

                    @foreach ($latests as $latest)
                    <div class="block-21 mb-4 d-flex">
                       
                        <a href="{{ url('/post'.'/'.$latest->slug) }}" class="blog-img mr-4" style="background-image: url({{ $latest->featured_image->getUrl() }});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">{{$latest->title}}</a></h3>
                            <div class="meta">
                                <div><a href="{{ url('/post'.'/'.$latest->slug) }}"><span class="icon-calendar"></span> {{$latest->created_at->format('M d, Y')}}</a></div>
                                {{-- <div><a href="#"><span class="icon-person"></span> Admin</a></div> --}}
                                {{-- <div><a href="#"><span class="icon-chat"></span> 19</a></div> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach

                   
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        @foreach ($tags as $tag)
                        @foreach ($data->tags as $item)
                        <a class="{{ ($item->name == $tag->name )? 'active': ''}}" href="{{ url('tags/'.$tag->slug) }}">{{ $tag->name }}</a>
                        @endforeach
                       
                        @endforeach

                       
                    </div>
                </div>
                {{-- <div class="sidebar-box ftco-animate">
                    <h3>Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                        necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente
                        consectetur similique, inventore eos fugit cupiditate numquam!</p>
                </div> --}}
            </div>
        </div>
    </div>
</section>

@endsection