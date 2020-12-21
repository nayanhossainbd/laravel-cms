@extends('websites.layouts.master')
@section('title')
{{ $data->title }}
@endsection
@section('content')
<!-- Page title -->
<section class="blog-posts blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9 ">
                <div class="post-wrap detail">

                    <article class="post clearfix">
                        <div class="title-post">
                            <h2>{{ $data->title }}</h2>
                        </div><!-- /.title-post -->
                        <div class="content-post">
                            <ul class="meta-post">
                                <li class="author padding-left-2">
                                    <span>Posted By: </span><a href="#">Admin</a>
                                </li>
                                <li class="comment">
                                    <a href="#">10 Comment</a>
                                </li>
                                <li class="date">
                                    <span>{{ $data->created_at->isoFormat('lll') }} </span>
                                </li>
                            </ul><!-- /.meta-post -->
                            <div class="featured-post">
                                @if($data->featured_image)
                                 <img src="{{ $data->featured_image->getUrl() }}">
                               
                                 @endif
                                {{-- <img src="{{ $data->featured_image->getUrl() }} }}" alt="image"> --}}
                            </div>
                            <div class="entry-post">
                                {!! $data->page_text !!}
                            </div>
                        </div><!-- /.content-post -->
                        <div class="direction">
                            <ul class="tags-share clearfix">
                                <li class="float-left">
                                    <div class="tags">
                                        <span>Tags:</span>
                                       
                                 @foreach ($data->tags as $tag)
                               {{-- {{ $tag }} --}}
                                 <a href="{{ url('tags/'.$tag->slug) }}">{{ $tag->name }}</a> 
                                 <span>,</span>
                                 @endforeach
                               
                                    </div><!-- /.tags -->
                                </li>
                                <li class="float-right">
                                   <div class="social-icon">
                                        <ul class="social-list">
                                            <li class="share">Share:</li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div><!-- /.social-icon --> 
                                </li>
                            </ul>
                           
                        </div><!-- /.direction -->
                    </article><!-- /.post -->

                </div><!-- /.post-wrap -->

                <div class="main-single">
                  
                    <div class="comments-area">
                        <ol class="comment-list">
                            <li class="comment">
                                <article class="comment-body">                                        
                                    <div class="comment-author">
                                        <img src="images/blog/comment1.png" alt="image">  
                                    </div><!-- .comment-author -->
                                    <div class="comment-text">
                                        <div class="comment-metadata clearfix">
                                            <h5><a href="#">Jennifer Aniston</a></h5>                
                                            <span class="date">October 19,2018</span>                   
                                        </div><!-- .comment-metadata -->
                                        <div class="comment-content">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything barrassing hidden in the middle of text. </p>
                                        </div><!-- .comment-content -->

                                        <div class="reply">
                                            <a href="#" class="comment-like-link"><i class="fa fa-thumbs-up"></i>108</a>
                                            <a href="#" class="comment-reply-link"><i class="fa fa-pencil-square-o"></i>Reply</a>
                                        </div>
                                       
                                    </div><!-- /.comment-text -->                                       
                                </article><!-- .comment-body -->
                                
                            </li><!-- #comment-## -->
                            <li class="comment">
                                <article class="comment-body">                                        
                                    <div class="comment-author">
                                        <img src="images/blog/comment2.png" alt="image">  
                                    </div><!-- .comment-author -->
                                    <div class="comment-text">
                                        <div class="comment-metadata clearfix">
                                            <h5><a href="#">Wiliam Chrisper</a></h5>                
                                            <span class="date">October 19,2018</span>                   
                                        </div><!-- .comment-metadata -->
                                        <div class="comment-content">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything barrassing hidden in the middle of text. </p>
                                        </div><!-- .comment-content -->

                                        <div class="reply">
                                            <a href="#" class="comment-like-link"><i class="fa fa-thumbs-up"></i>108</a>
                                            <a href="#" class="comment-reply-link"><i class="fa fa-pencil-square-o"></i>Reply</a>
                                        </div>
                                    </div><!-- /.comment-text -->                                       
                                </article><!-- .comment-body -->
                                
                            </li><!-- #comment-## -->                                     
                        </ol><!-- .comment-list -->

                        <div class="comment-respond" id="respond">
                            <div class="comment-reply-title">
                                <h5>Write a Comment</h5>
                                <p>Your email address will not be published. Required fields are marked *</p>
                            </div>
                            <form novalidate="" class="comment-form" id="commentform" method="post" action="{{ url('comment/add') }}">
                                @csrf
                               
                                <input type="hidden" aria-required="true" size="30" value=" {{ $data->id }}" name="post_id" id="author">
                                <input type="hidden" aria-required="true" size="30" value=" {{ Auth::user()->id }}" name="user_id" id="author">
                                <p class="comment-form-comment">
                                    <label>Review*</label>
                                    <textarea class="" tabindex="4" name="comment" required=""></textarea>                                      
                                </p>
                                <p class="comment-name">
                                    <label>Name*</label>                                  
                                    <input type="text" aria-required="true" size="30" value="" name="author" id="author">
                                </p>
                                <p class="comment-email"> 
                                    <label>Email*</label>                                       
                                    <input type="email" size="30" value="" name="email" id="email">
                                </p>
                                <p class="comment-form-notify clearfix">
                                    <input class="form-control" type="checkbox" name="check-notify" id="check-notify"> <label for="check-notify">Notify me of new posts by email</label>
                                </p>                                                        
                                <p class="form-submit">                 
                                    <button class="comment-submit">Submit</button>
                                </p>
                            </form>
                        </div><!-- /.comment-respond -->
                    </div><!-- /.comments-area -->
                </div><!-- /.main-single -->    
            </div><!-- /.col-md-9 -->
            <div class="col-sm-12 col-md-3">
                <div class="sidebar">
                    <div class="widget widget_categories">
                        <h5 class="widget-title">Categories</h5>
                        <ul>
                           
                            @foreach ($categories as $category)
                            @foreach ($data->categories as $item)
                            <li class="{{ ($category->name == $item->name)? 'active':''}}"><a href="{{ url('category/'.$category->slug) }}">{{ $category->name }}</a></li> 
                            @endforeach
                                        
                            @endforeach
                  

                           
                        </ul>
                    </div><!-- /.widget-categories -->

                    <div class="widget widget-news-latest">
                        <h5 class="widget-title">New Latest</h5>
                        <ul class="popular-news clearfix">
                            @foreach ($latests as $latest)
                            <li>                                      
                                <h6>
                                    <a href="{{ route('post',base64_encode($latest->title)) }}">{{ $latest->title }}</a>
                                </h6> 
                                <span class="post_meta">{{ $latest->created_at->isoFormat('lll') }}</span>
                            </li>
                            @endforeach
                           
                           
                        </ul><!-- /.popular-news -->
                    </div><!-- /.widget-news-latest -->

                    <div class="widget widget_tag">
                        <h5 class="widget-title">Popular Tags</h5>
                        <div class="tag-list">
                            @foreach ($tags as $tag)
                            @foreach ($data->tags as $item)
                            <a class="{{ ($item->name == $tag->name )? 'active': ''}}" href="{{ url('tags/'.$tag->slug) }}">{{ $tag->name }}</a>
                            @endforeach
                           
                            @endforeach
                          
                                
                        </div>
                    </div><!-- /.widget-tag -->
                 </div><!-- /.sidebar -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

@endsection