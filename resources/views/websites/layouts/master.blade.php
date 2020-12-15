<!DOCTYPE html>
@php

	 $menus = App\Models\Menu::whereNull('menu_id')
        ->with('childrenMenus')
        ->get();
@endphp
<head>
    <!-- Basic Page Needs -->
	<meta charset="utf-8">
	
    <title>@yield('title')</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 
   
  
    <link href="{{ asset('css/assets/bootstrap.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('website/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('website/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('website/css/responsive.css') }}" rel="stylesheet" />
   <!-- Animation Style -->
   <link rel="stylesheet" type="text/css" href="css/animate.css">

</head> 
<body class="header_sticky header-style-2 has-menu-extra">
	<!-- Preloader -->
<!--
    <div id="loading-overlay">
        <div class="loader"></div>
    </div> 
-->

    <!-- Boxed -->
    <div class="boxed">


        <div id="site-header-wrap">
            <!-- Header -->
            <header id="header" class="header clearfix">
                <div class="container-fluid clearfix container-width-93" id="site-header-inner">
                    <div id="logo" class="logo float-left">
                        <a href="index.html" title="logo">
                            <h2>{{ trans('panel.site_title') }}</h2>
                            {{-- <img src="images/logo.png" alt="image" width="107" height="24" data-retina="images/logo@2x.png" data-width="107" data-height="24"> --}}
                        </a>
                    </div><!-- /.logo -->
                    <div class="mobile-button"><span></span></div>
                    <ul class="menu-extra">
                        <li class="box-search">
                            <a class="icon_search header-search-icon" href="#">
                                <i class="icon_search fab fa-facebook-f"></i>
                            </a>
                            <form role="search" method="get" class="header-search-form" action="#">
                                <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">
                                <button type="submit" class="header-search-submit" title="Search">Search</button>
                            </form>
                        </li>
                        <li class="box-login">
                            <a class="icon_login" href="#">
                                <i class="icon_login fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="box-cart nav-top-cart-wrapper">
                            <a class="icon_cart nav-cart-trigger active" href="#">
                                <i class="icon_cart fab fa-facebook-f"></i>
                                <span>3</span></a>
                            <div class="nav-shop-cart">
                                <div class="widget_shopping_cart_content">
                                    <div class="woocommerce-min-cart-wrap">
                                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                            <li class="woocommerce-mini-cart-item mini_cart_item">
                                                <span>No Items in Shopping Cart</span>
                                            </li>
                                        </ul>
                                    </div><!-- /.widget_shopping_cart_content -->
                                </div>
                            </div><!-- /.nav-shop-cart -->
                        </li>
                    </ul><!-- /.menu-extra -->
                    <div class="nav-wrap">
                        <nav id="mainnav" class="mainnav">
        
                            <ul class="menu">
                            @foreach ($menus as $menu)
                        
                            <li class="{{route('menu', $menu->slug ) ? "active" : "" }}">
                              <a  href="{{ $menu->slug }}" >
                                {{-- {{ ($menu->childrenMenus) }} --}}
                                  {{ $menu->name }}
                                  @if ($menu->childrenMenus)
                                  <ul class="{{ ($menu->childrenMenus)? 'submenu': '' }}">
                                  @foreach ($menu->childrenMenus as $childMenu)
                                         @include('websites.child_menu', ['child_menu' => $childMenu])
                                     @endforeach
                                  @endif
                                
                                </ul>                               
                                  
							  </a>
                          </li>                                                     
                            @endforeach
                        </ul>
                        
                        </nav><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->
                </div><!-- /.container-fluid -->
            </header><!-- /header -->
        </div><!-- /.site-header-wrap -->
        
       
        @yield('content')

    	

{{-- main content --}}
       

         

        <section class="flat-row mail-chimp">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="text">
							<h3>Sign up for Send Newsletter</h3>
						</div>
					</div>
					<div class="col-md-8">
						<div class="subscribe clearfix">
							<form action="#" method="post" accept-charset="utf-8" id="subscribe-form">
								<div class="subscribe-content">
									<div class="input">
										<input type="email" name="subscribe-email" placeholder="Your Email">
									</div>
									<div class="button">
										<button type="button">SUBCRIBE</button>
									</div>
								</div>
							</form>
							<ul class="flat-social">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
								<li><a href="#"><i class="fab fa-behance"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
							</ul><!-- /.flat-social -->
						</div><!-- /.subscribe -->
					</div>
				</div>
			</div>
		</section><!-- /.mail-chimp -->

		<!-- Footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="widget widget-link">
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Online Store</a></li>
								<li><a href="blog-list.html">Blog</a></li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</div><!-- /.widget -->
					</div><!-- /.col-md-3 -->
					<div class="col-md-3">
						<div class="widget widget-link link-login">
							<ul>
								<li><a href="#">Login/ Register</a></li>
								<li><a href="#">Your Cart</a></li>
								<li><a href="#">Wishlist items</a></li>
								<li><a href="#">Your checkout</a></li>
							</ul>
						</div><!-- /.widget -->
					</div><!-- /.col-md-3 -->
					<div class="col-md-3">
						<div class="widget widget-link link-faq">
							<ul>
								<li><a href="faqs.html">FAQs</a></li>
								<li><a href="#">Term of service</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Returns</a></li>
							</ul>
						</div><!-- /.widget -->
					</div><!-- /.col-md-3 -->
					<div class="col-md-3">
						<div class="widget widget-brand">
							<div class="logo logo-footer">
								<a href="index.html"><img src="images/logo@2x.png" alt="image" width="107" height="24"></a>
							</div>
                            <ul class="flat-contact">
								<li class="address">112 Kingdom, NA 12, New York</li>
								<li class="phone">+12 345 678 910</li>
								<li class="email">infor.deercreative@gmail.com</li>
							</ul><!-- /.flat-contact -->
						</div><!-- /.widget -->
					</div><!-- /.col-md-3 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer><!-- /.footer -->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">Copyright @2020 <a href="#">Nayan Hosssain</a></p>
					</div>
				</div>
			</div>
		</div>

		<!-- Go Top -->
	    <a class="go-top">
	        <i class="fa fa-chevron-up"></i>
	    </a>  

    </div>

{{-- Js include --}}
<script src="{{ asset('websites/js/jquery.min.js') }}"></script>
<script src="{{ asset('websites/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('websites/js/jquery.easing.js') }}"></script>
<script src="{{ asset('websites/js/parallax.js') }}"></script>
<script src="{{ asset('websites/js/images-loaded.js') }}"></script>
<script src="{{ asset('websites/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('websites/js/magnific.popup.min.js') }}"></script>
<script src="{{ asset('websites/js/query.hoverdir.js') }}"></script>
<script src="{{ asset('websites/js/main.js') }}"></script>
<script src="{{ asset('websites/js/moment.min.js') }}"></script>

    

  
</body> 
</html>                               