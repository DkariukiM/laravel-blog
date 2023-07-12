@extends('layout')

        @section('start-card')
        <!-- section starts  -->
        <section id="hero">
            <div class="container-xl">
                <div class="row gy-4">
                    <div class="col-lg-8">

                        <div class="post featured-post-lg">
                            <div class="details clearfix">
                                <a href="#" class="category-badge">Finance</a>
                                <h2 class="post-title">
                                    <a href="#">{{$post->title}}</a>
                                </h2>
                                <ul class="meta list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#">{{$post->user->name}}</a>
                                    </li>
                                    <li class="list-inline-item">{{$post->created_at->diffForHumans()}}</li>
                                </ul>
                            </div>
                            <a href="#">
                                <div class="thumb rounded">
                                    <div class="inner data-bg-image" data-bg-image="{{asset ($post->image) }}">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="post-tabs rounded bordered">
                            <ul class="nav nav-tabs nav-pills nav-fill" id="postTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="popular" aria-selected="true" class="nav-link active"
                                        data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab"
                                        type="button">
                                        Popular
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="recent" aria-selected="false" class="nav-link"
                                        data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab"
                                        type="button">
                                        Recent
                                    </button>
                                </li>

                            </ul>

                            <!-- content  -->
                            <div class="tab-content" id="postsTabContent">
                                <!-- loader -->
                                <div class="lds-dual-ring"></div>
                                <!-- pop post  -->

                                <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                                    role="tabpanel">
                                    <!-- post  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{asset('images/posts/tabs-1.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Bitcoin price raise after sudden fall</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">24 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- post2  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
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
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- post3  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
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
                                                <li class="list-inline-item">28 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post4  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{asset ('images/posts/tabs-4.png') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Improve your mails with Grammarly</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">01 Jun 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- recent  -->
                                <div class="tab-pane fade" id="recent" aria-labelledby="recent-tab" role="tabpanel">
                                    <!-- post  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{asset ('images/posts/tabs-2.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Clubhouse breaking records of many apps</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">24 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post2  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{asset ('images/posts/tabs-1.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">At what age you should start investing</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post3  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{asset ('images/posts/tabs-5.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Sonu sood foundation providing help in COVID-19</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">28 Jun 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post4  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{asset ('images/posts/tabs-3.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Should we invest in soverign gold bonds</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">04 Jun 2021</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>
        @endsection

        @section('main')
        <!-- main content  -->
        <section class="main-content">
            <div class="container-xl">
                <div class="row gy-4">

                    <!-- left part 1st section  -->
                    <div class="col-lg-8">
                        <div class="section-header">
                            <!-- <h3 class="section-title">Editor's Pick</h3> -->
                            <p class="excerpt mb-0"> {{$post->title}}
                            </p>
                        </div>

                        <div class="spacer" data-height="50"></div>

                        <!-- comment section -->
                        <div class="section-header">
                            <h3 class="section-title">Comments</h3>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row gy-5">
                                    <!-- comment -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="{{asset ('images/posts/tabs-2.jpg') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h3 class="post-title my-0">
                                                User
                                            </h3>

                                            <h6 class="meta list-inline mt-1 mb-0">
                                                Message.
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- end of comment section -->

                        <!-- begining of comment form -->
                        <div class="spacer" data-height="50"></div>

                        <div class="section-header">
                            <h3 class="section-title">Leave A Comment.</h3>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row gy-5">
                                    <!-- comment form-->
                                    <div class="widget-content">
                                    <form action="{{route('blog.comment')}}" method="POST">
                                    @csrf
                                        <div class="mb-2">
                                            <input type="text" class="form-control w-100 " name="name" value="{{old('name')}}" placeholder="Name...">
                                            @error('name')
                                                <p style="color: red; margin-bottom:25px ">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-2">
                                            <input type="email" class="form-control w-100 "name="email" value="{{old('email')}}" placeholder="Email address...">
                                            @error('email')
                                                <p style="color: red; margin-bottom:25px ">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-2">
                                            <textarea class="form-control w-100 text-center" name="body">{{old('body')}}</textarea>
                                            @error('body')
                                                <p style="color: red; margin-bottom:25px ">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <button class="btn btn-default btn-full" type="submit"> Comment</button>

                                    </form>
                                    <span class="newsletter-privacy text-center mt-3">
                                        By commenting, you agree to our <a href="#">Privacy policy</a>
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
        @endsection
