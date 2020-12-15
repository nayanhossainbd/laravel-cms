
@extends('websites.layouts.master')
@section('content')


<!-- Page title -->
<div class="page-title parallax parallax1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Blog List</h1>
                </div><!-- /.page-title-heading -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="blog-grid-1.html">Blog</a></li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->

<!-- Blog posts -->
<section class="blog-posts grid-posts style2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="post-wrap margin-bottom-10">
                    <div class="grid two">
                       
                        <article class="post clearfix">
                            <div class="featured-post">
                                <img src="images/blog/20.jpg" alt="image">
                            </div>
                            <div class="content-post">
                                <div class="title-post">
                                    <h2><a href="blog-detail.html">Grenfell Remembered, Six Months On</a></h2>
                                </div><!-- /.title-post -->
                                <div class="entry-post">
                                    <p>MARKING exactly six months since the devastating blaze at Grenfell Tower, in which 71 people died and hundreds more lost...</p>
                                    <div class="more-link">
                                        <a href="blog-detail.html">Read More</a>
                                    </div>
                                </div>
                            </div><!-- /.content-post -->
                        </article><!-- /.post -->
                        
                        <article class="post clearfix">
                            <div class="featured-post">
                                <img src="images/blog/12.jpg" alt="image">
                            </div>
                            <div class="content-post">
                                <div class="title-post">
                                    <h2><a href="blog-detail.html">The Design Museum Honours...</a></h2>
                                </div><!-- /.title-post -->
                                <div class="entry-post">
                                    <p>When the Tunisian-born couturier Azzedine Alaïa passed away in Paris on November 18, tributes began pouring in...</p>
                                    <div class="more-link">
                                        <a href="blog-detail.html">Read More</a>
                                    </div>
                                </div>
                            </div><!-- /.content-post -->
                        </article><!-- /.post -->

                        <article class="post clearfix">
                            <div class="featured-post margin-bottom-14">
                                <img src="images/blog/14.jpg" alt="image">
                            </div>
                            <div class="content-post">
                                <div class="title-post">
                                    <h2><a href="blog-detail.html">Looking For A New Statement Piece?</a></h2>
                                </div><!-- /.title-post -->
                                <div class="entry-post">
                                    <p>There’s nothing more personal in anyone’s wardrobe than their jewellery. It tells a story beyond the possibilities of most clothes...</p>
                                    <div class="more-link">
                                        <a href="blog-detail.html">Read More</a>
                                    </div>
                                </div>
                            </div><!-- /.content-post -->
                        </article><!-- /.post -->

                        <article class="post clearfix">
                            <div class="featured-post margin-bottom-14">
                                <img src="images/blog/15.jpg" alt="image">
                            </div>
                            <div class="content-post">
                                <div class="title-post">
                                    <h2><a href="blog-detail.html">Anya Hindmarch Changes Strategy</a></h2>
                                </div><!-- /.title-post -->
                                <div class="entry-post">
                                    <p>ANYA HINDMARCH’s shows are a highlight on the London Fashion Week schedule - a visual feast that has seen the designer's team...</p>
                                    <div class="more-link">
                                        <a href="blog-detail.html">Read More</a>
                                    </div>
                                </div>
                            </div><!-- /.content-post -->
                        </article><!-- /.post -->

                        <article class="post clearfix">
                            <div class="featured-post">
                                <img src="images/blog/17.jpg" alt="image">
                            </div>
                            <div class="content-post">
                                <div class="title-post">
                                    <h2><a href="blog-detail.html">Five Festive Obsessions That Make...</a></h2>
                                </div><!-- /.title-post -->
                                <div class="entry-post">
                                    <p>‘Tis the season of merriment, as the December calendar swells with soirées, parties and gatherings galore. The ingredients of each family...</p>
                                    <div class="more-link">
                                        <a href="blog-detail.html">Read More</a>
                                    </div>
                                </div>
                            </div><!-- /.content-post -->
                        </article><!-- /.post -->

                        <article class="post clearfix">
                            <div class="featured-post">
                                <img src="images/blog/18.jpg" alt="image">
                            </div>
                            <div class="content-post">
                                <div class="title-post">
                                    <h2><a href="blog-detail.html">The Sustainable New Denim Line</a></h2>
                                </div><!-- /.title-post -->
                                <div class="entry-post">
                                    <p>There is a new era of sustainability in fashion. No longer is such a word exclusively associated with hand-hewn hemp or hessian sacking,..</p>
                                    <div class="more-link">
                                        <a href="blog-detail.html">Read More</a>
                                    </div>
                                </div>
                            </div><!-- /.content-post -->
                        </article><!-- /.post -->

                    </div><!-- /.grid -->
                </div><!-- /.post-wrap -->
                <div class="blog-pagination clearfix">
                    <ul class="flat-pagination">
                        <li class="prev">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#" title="">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul><!-- /.flat-pagination -->
                </div><!-- /.blog-pagination -->
            </div><!-- /.col-md-8 -->
            <div class="col-md-4">
                <div class="sidebar style2">
                    <div class="widget widget_categories">
                        <h5 class="widget-title">Categories</h5>
                        <ul>
                            <li><a href="#">Fashion</a></li>
                            <li class="active"><a href="#">Design</a></li>
                            <li><a href="#">Trends</a></li>
                            <li><a href="#">Uncategorized</a></li>
                            <li><a href="#">Quote</a></li>
                        </ul>
                    </div><!-- /.widget-categories -->

                    <div class="widget widget-news-latest">
                        <h5 class="widget-title">New Latest</h5>
                        <ul class="popular-news clearfix">
                            <li>                                      
                                <h6>
                                    <a href="#">The Digital Style Guides</a>
                                </h6> 
                                <a class="post_meta">August 19, 2018</a>
                            </li>
                            <li>                   
                                <h6><a href="#">How to choice swimming trunks for this summer</a></h6>
                                <a class="post_meta">August 19, 2018</a>
                            </li>
                            <li>                  
                                <h6><a href="#">Building a Brand for Startup</a></h6>
                                <a class="post_meta">August 19, 20187</a>
                            </li>
                        </ul><!-- /.popular-news -->
                    </div><!-- /.widget-news-latest -->

                    <div class="widget widget_tag">
                        <h5 class="widget-title">Popular Tags</h5>
                        <div class="tag-list">
                            <a href="#">All products</a>
                            <a href="#" class="active">Bags</a>
                            <a href="#">Chair</a>
                            <a href="#">Decoration</a>
                            <a href="#">Fashion</a> 
                            <a href="#">Tie</a>
                            <a href="#">Furniture</a>
                            <a href="#">Accesories</a>     
                        </div>
                    </div><!-- /.widget-tag -->
                 </div><!-- /.sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog posts -->
@endsection