
@extends('websites.layouts.master')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @foreach ($posts as $post)


                <div class="case">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                            @if($post->featured_image)
                        
                            <a href="{{ url('/post'.'/'.base64_encode($post->title)) }}" class="img w-100 mb-3 mb-md-0"
                            style="background-image: url('{{ $post->featured_image->getUrl('preview') }}');">
                        </a>
                            @endif
                            
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                            <div class="text w-100 pl-md-3">
                                <span class="subheading">   @foreach ($post->categories as $cate)
                                    {{-- {{ $tag }} --}}
                                     {{$cate->name  }}
                                      <span>,</span>
                                      @endforeach</span>
                                <h2><a href="{{ url('/post'.'/'.base64_encode($post->title)) }}">{{ $post->title }}</a>
                                </h2>
                                <ul class="media-social list-unstyled">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                </ul>
                                <div class="meta">
                                    <p class="mb-0"><a href="{{ url('/post'.'/'.base64_encode($post->title)) }}">{{ $post->created_at->format('d-M-Y | h:s') }}</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                @endforeach
              
               
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                   {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection