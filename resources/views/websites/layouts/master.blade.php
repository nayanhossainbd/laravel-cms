<!DOCTYPE html>

@php
    $setting=App\Models\Setting::latest()->first();
    $menus=App\Models\Menu::all();
    $posts=App\Models\ContentPost::latest()->take(3)->get();
    // dd($setting->logo);
@endphp
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">

    <title>{{ $setting->name }}</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link href="{{ asset('website/css/open-iconic-bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('website/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('website/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('website/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('website/css/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('website/css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('website/css/flaticon.css') }}" rel="stylesheet" />
    <link href="{{ asset('website/css/icomoon.css') }}" rel="stylesheet" />

    <link href="{{ asset('website/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('website/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/assets/toastr.min.css') }}" rel="stylesheet" />
    @yield('styles')


</head>

<body>
    <!-- Preloader -->
    <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">{{ $setting->name }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ route("home")? "active" : '' }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                   <?php 
                    foreach ($menus as $menu){
                        $slug=App\Models\Page::where('id',$menu->type)->first();

                        ?>
                        <li class="nav-item {{ url("$slug->slug") ? "active" : '' }}"><a href="{{ url("$slug->slug") }}" class="nav-link">{{ $menu->name}}</a></li>
                      <?php
                    }
                   ?>
                  
                  
                  
                </ul>
            </div>
        </div>
    </nav>


    @yield('banner')
 
	
	<section class="ftco-section">

    @yield('content')

</section>

    {{-- main content --}}


    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="logo"><a href="#">
                            @if($setting->logo)
                            <img class="img rounded" src="{{ $setting->logo->getUrl('preview') }}" alt="{{ $setting->name }}">
                            @else 
                            {{ $setting->name }}
                            @endif
                        </h2>
                        <p>{{$setting->description}}</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="{{ $setting->twitter }}"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="{{ $setting->facebook }}"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="{{ $setting->linkedin }}"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">latest Posts</h2>

@foreach ($posts as $item)
<div class="block-21 mb-4 d-flex">
    @if($item->featured_image)
    <a class="img mr-4 rounded" style="background-image: url({{ $item->featured_image->getUrl('preview') }});"></a>
    
    @endif
  
    <div class="text">
        <h3 class="heading"><a href="{{ url('/post'.'/'.base64_encode($item->title)) }}">{{  $item ->title}}</a>
        </h3>
        <div class="meta">
            <div><a href="{{ url('/post'.'/'.base64_encode($item->title)) }}"></span>{{$item->created_at->isoFormat('LLL')}}</a></div>
        
        </div>
    </div>
</div>
@endforeach

                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <?php 
                            foreach ($menus as $menu){
                                $slug=App\Models\Page::where('id',$menu->type)->first();
        
                                ?>
                                <li ><a href="{{ url("$slug->slug") }}" class="py-1 d-block"><span
                                    class="ion-ios-arrow-forward mr-3"></span> {{ $menu->name}}</a></li>
                              <?php
                            }
                           ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">{{$setting->address}}</span></li>
                                <li><a href="cell:{{$setting->phone_no}}"><span class="icon icon-phone"></span><span class="text">{{$setting->phone_no}}</span></a></li>
                                <li><a href="mailto:{{ $setting->email }}"><span class="icon icon-envelope"></span><span
                                            class="text">{{ $setting->email }}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                       
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());

                        </script> All rights reserved | by <a href="#" target="_blank">{{ trans('panel.site_title') }}</a>
                       
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- loader -->
    {{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> --}}

    {{-- Js include --}}
    <script src="{{ asset('website/js/jquery.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('website/js/popper.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('website/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('website/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('website/js/aos.js') }}"></script>
    <script src="{{ asset('website/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('website/js/scrollax.min.js') }}"></script>
    <script src="{{ asset('js/assets/toastr.min.js') }}"></script>
    <script src="{{ asset('website/js/main.js') }}"></script>



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-23581568-13');

    </script>

@yield('scripts')

</body>

</html>
