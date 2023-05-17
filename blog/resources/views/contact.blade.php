<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel=" stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="site-wrapper">
        <div class="main-overlay"></div>
        <header class="header-default">
            <nav class="navbar navbar-expand-lg">
                <div class="container-xl">
                    <!-- logo  -->
                    <a href="/" class="navbar-brand">
                        Blog
                    </a>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a href="/" class="nav-link">Home</a>
                                
                            </li>
                            <li class="nav-item">
                                <a href="/blog" class="nav-link">Posts</a>
                            </li>
                            <li class="nav-item">
                                <a href="/about" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="/contact" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <!-- right side of header  -->
                    <div class="header-right">
                        <ul class="social-icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fab fa-itunes"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>

                        <!-- buttons  -->
                        <div class="header-buttons">
                            <button class="search icon-button">
                                <i class="icon-magnifier"></i>
                            </button>
                            <button class="burger-menu icon-button">
                                <span class="burger-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>


        </header>



        <!-- main content  -->

        <section class="main-content">
            <div class="container-xl">
                <div class="row gy-4">

                    <!-- left part 1st section  -->
                    <div class="col-lg-8">


                        <!-- begining of comment form -->
                        <div class="section-header">
                            <h3 class="section-title">Contact Us</h3>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row gy-5">
                                    <!-- comment form-->
                                    <div class="widget-content">
                                    <form action="#">
                                        <div class="mb-2">
                                            <input type="email" class="form-control w-100 "
                                                placeholder="Name...">
                                        </div>

                                        <div class="mb-2">
                                            <input type="email" class="form-control w-100 "
                                                placeholder="Email address...">
                                        </div>

                                        <div class="mb-2">
                                            <input type="email" class="form-control w-100 "
                                                placeholder="Subject...">
                                        </div>

                                        <div class="mb-2">
                                            <textarea class="form-control w-100 "
                                                > </textarea>
                                        </div>

                        


                                        <button class="btn btn-default btn-full" type="submit"> Submit </button>

                                    </form>
                                    <span class="newsletter-privacy text-center mt-3">
                                        By clicking on submit, you agree to our <a href="#">Privacy policy</a>
                                    </span>
                                </div>

                                    <!-- end of comment form -->


                            </div>
                        </div>


                        <div class="spacer" data-height="50"></div>

                        <div class="section-header">
                            <h3 class="section-title">Latest Posts</h3>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <!-- post  -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <span class="post-format-sm">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{asset ('images/posts/latest-1.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        <img src="{{asset ('images/other/author-sm.jpg') }}" class="author" alt="">
                                                        Techie Coder
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Trending</a>
                                                </li>
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                            <h5 class="post-tile">
                                                <a href="#">
                                                    360-seater plane flies to Dubai from Mumbai with only 1 Passenger
                                                </a>
                                            </h5>
                                            <p class="excerpt mb-0">
                                                This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                                                iure.
                                            </p>
                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="far fa-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="#"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <!-- post  -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{asset ('images/posts/latest-2.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        <img src="{{asset ('images/other/author-sm.jpg') }}" class="author" alt="">
                                                        Techie Coder
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Technology</a>
                                                </li>
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                            <h5 class="post-tile">
                                                <a href="#">
                                                    MS-teams to enhancce user experience with dev updates
                                                </a>
                                            </h5>
                                            <p class="excerpt mb-0">
                                                This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                                                iure.
                                            </p>
                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="far fa-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="#"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <!-- post  -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <span class="post-format-sm">
                                                <i class="icon-camrecorder"></i>
                                            </span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{asset ('images/posts/latest-3.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        <img src="{{asset ('images/other/author-sm.jpg') }}" class="author" alt="">
                                                        Techie Coder
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Technology</a>
                                                </li>
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                            <h5 class="post-tile">
                                                <a href="#">
                                                    India responds to whatsapp, says no intention to violate ROP.
                                                </a>
                                            </h5>
                                            <p class="excerpt mb-0">
                                                This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                                                iure.
                                            </p>
                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="far fa-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="#"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <!-- post  -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{asset ('images/posts/latest-4.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        <img src="{{asset ('images/other/author-sm.jpg') }}" class="author" alt="">
                                                        Techie Coder
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Finance</a>
                                                </li>
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                            <h5 class="post-tile">
                                                <a href="#">
                                                    Sensex closes 380pts higher, Nifty at 15,302; metal, power drag
                                                </a>
                                            </h5>
                                            <p class="excerpt mb-0">
                                                This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                                                iure.
                                            </p>
                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="far fa-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="#"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-simple">Load More</button>
                                </div>
                            </div>
                        </div>
                        <!-- left part over here  -->
                    </div>
                    <!-- right part starts from here  -->

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="widget rounded">
                                <div class="widget-about text-center">
                                    <!-- <img src="images/logo.svg" alt="" class="logo"> insert your logo here if you have one for your blog -->
                                    Blog Name/ Logo
                                    <p class="mb-4" style="text-align: justify;">This is Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit.
                                        Dolores tempora accusantium culpa deleniti nesciunt repellat quisquam quos vero.
                                        Esse itaque est optio nostrum porro quisquam nihil reprehenderit fugiat enim
                                        non.</p>
                                    <ul class="social-icons list-unstyled list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"><i class="far fa-envelope"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Popular Posts</h3>
                                </div>
                                <div class="widget-content">
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">1</span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{asset ('images/posts/tabs-1.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Bitcoin price raise after sudden fall</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">30 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">2</span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{asset ('images/posts/tabs-2.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Clubhouse Crosses 1Mn Downloads On Play Store</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">30 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">3</span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{asset ('images/posts/tabs-3.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Check current Gold Price of 24k</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">30 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">4</span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{asset ('images/posts/tabs-4.png' ) }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Improve your mails with Grammarly</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">30 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Explore Topics</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="#">Trending</a><span>(7)</span></li>
                                        <li><a href="#">Politics</a><span>(5)</span></li>
                                        <li><a href="#">Fashion</a><span>(1)</span></li>
                                        <li><a href="#">Lifestyle</a><span>(9)</span></li>
                                        <li><a href="#">Inspiration</a><span>(2)</span></li>
                                        <li><a href="#">Culture</a><span>(4)</span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Newsletter</h3>
                                </div>
                                <div class="widget-content">
                                    <span class="newsletter-headline text-center mb-3">Join 50,000 subscribers</span>
                                    <form action="#">
                                        <div class="mb-2">
                                            <input type="email" class="form-control w-100 text-center"
                                                placeholder="Email address...">
                                        </div>
                                        <button class="btn btn-default btn-full">Sign Up</button>

                                    </form>
                                    <span class="newsletter-privacy text-center mt-3">
                                        By signing up, you agree to our <a href="#">Privacy policy</a>
                                    </span>
                                </div>
                            </div>

                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">COVID-19</h3>
                                </div>
                                <div class="widget-content">
                                    <div class="post-carousel-widget">

                                        <div class="post post-carousel">
                                            <div class="thumb rounded">
                                                <a href="#" class="category-badge position-absolute">COVID-19</a>
                                                <a href="#">
                                                    <div class="inner">
                                                        <img src="{{asset ('images/posts/wid-1.jpg') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <h5 class="post-title mb-0 mt-4">
                                                <a href="#">10 Things to do for being safe of corona</a>
                                            </h5>
                                            <ul class="meta list-inline mt-2 mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#">Techie Coder</a>
                                                </li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                        <div class="post post-carousel">
                                            <div class="thumb rounded">
                                                <a href="#" class="category-badge position-absolute">COVID-19</a>
                                                <a href="#">
                                                    <div class="inner">
                                                        <img src="{{asset ('images/posts/wid-2.jpg') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <h5 class="post-title mb-0 mt-4">
                                                <a href="#">Wash your hands after certain interval of time.</a>
                                            </h5>
                                            <ul class="meta list-inline mt-2 mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#">Techie Coder</a>
                                                </li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                        <div class="post post-carousel">
                                            <div class="thumb rounded">
                                                <a href="#" class="category-badge position-absolute">COVID-19</a>
                                                <a href="#">
                                                    <div class="inner">
                                                        <img src="{{asset ('images/posts/wid-3.jpg') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <h5 class="post-title mb-0 mt-4">
                                                <a href="#">Get vaccinated to stop the chain of corona</a>
                                            </h5>
                                            <ul class="meta list-inline mt-2 mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#">Techie Coder</a>
                                                </li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="slick-arrows-bot">
                                        <buttton class="carousel-botNav-prev slick-custom-buttons" type="button"
                                            data-role="none" aria-label="Previous">
                                            <i class="icon-arrow-left"></i>
                                        </buttton>
                                        <buttton class="carousel-botNav-next slick-custom-buttons" type="button"
                                            data-role="none" aria-label="Next">
                                            <i class="icon-arrow-right"></i>
                                        </buttton>
                                    </div>

                                </div>
                            </div>


                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Tag Clouds</h3>
                                </div>
                                <div class="widget-content">
                                    <a href="#" class="tag">#Trending</a>
                                    <a href="#" class="tag">#Cooking</a>
                                    <a href="#" class="tag">#Featured</a>
                                    <a href="#" class="tag">#Beauty</a>
                                    <a href="#" class="tag">#Finance</a>
                                    <a href="#" class="tag">#Celebrities</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="instagram">
            <div class="container-xl">
                <a href="#" class="btn btn-default btn-instagram">@TC Blogs on Instagram</a>
                <div class="instagram-feed d-flex flex-wrap">
                    <div class="insta-item col-sm-2 col-6 col-md-2">
                        <a href="#">
                            <img src="{{asset ('images/insta/insta-1.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="insta-item col-sm-2 col-6 col-md-2">
                        <a href="#">
                            <img src="{{asset ('images/insta/insta-2.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="insta-item col-sm-2 col-6 col-md-2">
                        <a href="#">
                            <img src="{{asset ('images/insta/insta-3.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="insta-item col-sm-2 col-6 col-md-2">
                        <a href="#">
                            <img src="{{asset ('images/insta/insta-4.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="insta-item col-sm-2 col-6 col-md-2">
                        <a href="#">
                            <img src="{{asset ('images/insta/insta-5.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="insta-item col-sm-2 col-6 col-md-2">
                        <a href="#">
                            <img src="{{asset ('images/insta/insta-6.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container-xl">
                <div class="footer-inner">
                    <div class="row d-flex align-items-center gy-4">
                        <div class="col-md-4">
                            <span class="copyright">Copyright  &copy; <script>document.write(new Date().getFullYear())</script> All Rights reserved.</span>
                        </div>
                        <div class="col-md-4 text-center">
                            <ul class="social-icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-itunes"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <a href="#" id="return-to-top" class="float-md-end">
                                <i class="icon-arrow-up"></i>
                                Back to Top
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




    </div>


    <!-- canvas menu  -->
    <div class="canvas-menu d-flex align-items-end flex-column">
        <button class="btn-close" aria-label="Close" type="button"></button>

        <div class="logo">
            <!-- <img src="images/logo.svg" alt=""> Put your logo here -->
            Blog Name
        </div>
        <nav>
            <ul class="vertical-menu">
                <li class="active">
                    <a href="index.html">Home</a>
                    <ul class="submenu">
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">Electronic</a></li>
                        <li><a href="#">Cricket</a></li>
                        <li><a href="#">Technology</a></li>
                    </ul>
                </li>
                <li><a href="#">Latest</a></li>
                <li><a href="#">Trending</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>


        <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-itunes"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-pinterest"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#"><i class="fab fa-youtube"></i></a>
            </li>
        </ul>
    </div>


    <!-- search pop up  -->
    <div class="search-popup">
        <button class="btn-close" aria-label="Close" type="button"></button>

        <div class="search-content">
            <div class="text-center">
                <h3 class="mb-4 mt-0">Press ESC to close</h3>
            </div>

            <form action="" class="d-flex search-form">
                <input type="search" placeholder="Search and press enter ..." aria-label="Search"
                    class="form-control me-2">
                <button class="btn btn-default btn-lg" type="submit">
                    <i class="icon-magnifier"></i>
                </button>
            </form>
        </div>
    </div>









    <!-- javascripts  -->
    <script src="{{asset ('js/jquery.min.js') }}"></script>
    <script src="{{asset ('js/popper.min.js') }}"></script>
    <script src="{{asset ('js/bootstrap.min.js') }}"></script>
    <script src="{{asset ('js/slick.min.js') }}"></script>
    <script src="{{asset ('js/jquery.sticky-sidebar.min.js') }}"></script>
    <script src="{{asset ('js/main.js') }}"></script>

</body>

</html>