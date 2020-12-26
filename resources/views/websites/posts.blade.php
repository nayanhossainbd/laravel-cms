@extends('websites.layouts.master')
@section('banner')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('website/images/bg_1.jpg') }}');"
data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Posts</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                            class="ion-ios-arrow-forward"></i></a></span> <span>Posts <i
                        class="ion-ios-arrow-forward"></i></span></p>
        </div>
    </div>
</div>
</section>
@endsection
@section('content')
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row d-flex">
            @foreach ($posts as $post)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    @if($post->featured_image)
                    
                    <a href="{{ url('/post'.'/'.base64_encode($post->title)) }}" class="block-20"
                    style="background-image: url('{{ $post->featured_image->getUrl('preview') }}');">
                </a>
                    @endif
                   
                    <div class="text p-4 float-right d-block">
                        <div class="topper d-flex align-items-center">
                           
                            @php
                                $date=$post->created_at;
                                
                            @endphp
                            <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                <span class="day"> {{ $date->format('d') }}</span>
                            </div>
                            <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                <span class="yr">{{ $date->format('Y') }}</span>
                                <span class="mos">{{ $date->monthName }}</span>
                            </div>
                        </div>
                        <h3 class="heading mb-3"><a href="{{ url('/post'.'/'.base64_encode($post->title)) }}">{{ $post->title }}</a></h3>
                        <p> {{  $post->excerpt }}</p>
                        <p><a href="#" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read
                                more</a></p>
                    </div>
                </div>
            </div>
            
            @endforeach
          
         
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    {{ $posts->links() }}
                   
                </div>
            </div>
        </div>
    </div>
</section>



@endsection