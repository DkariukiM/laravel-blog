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
                                    <a href="#">3 Things to avoid while investing in stock market as a beginner</a>
                                </h2>
                                <ul class="meta list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#">Techie Coder</a>
                                    </li>
                                    <li class="list-inline-item">30 May 2021</li>
                                </ul>
                            </div>
                            <a href="#">
                                <div class="thumb rounded">
                                    <div class="inner data-bg-image" data-bg-image="{{ asset('images/posts/featured-lg.jpg') }}">
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
                            <p class="excerpt mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet enim tortor at auctor urna nunc id cursus metus. Lectus arcu bibendum at varius vel pharetra vel turpis nunc. Quam quisque id diam vel quam elementum. Enim neque volutpat ac tincidunt vitae semper quis lectus nulla. Rutrum tellus pellentesque eu tincidunt tortor. Non diam phasellus vestibulum lorem sed risus. Ut pharetra sit amet aliquam. Faucibus in ornare quam viverra orci sagittis eu volutpat odio. Nibh tellus molestie nunc non blandit. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Volutpat consequat mauris nunc congue nisi vitae. Viverra ipsum nunc aliquet bibendum enim facilisis gravida neque. Est lorem ipsum dolor sit amet. Et malesuada fames ac turpis egestas integer. Erat nam at lectus urna duis convallis convallis tellus. Pellentesque diam volutpat commodo sed egestas egestas. Ultricies integer quis auctor elit. Ac felis donec et odio pellentesque diam.

                            Volutpat lacus laoreet non curabitur gravida arcu. Arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales. Lectus nulla at volutpat diam ut venenatis. Vivamus arcu felis bibendum ut tristique et. Purus semper eget duis at tellus at urna. Est lorem ipsum dolor sit amet. Posuere urna nec tincidunt praesent semper. Ut porttitor leo a diam sollicitudin tempor id eu nisl. Nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet. Nisl vel pretium lectus quam id leo in. Arcu cursus euismod quis viverra nibh cras pulvinar mattis. Id semper risus in hendrerit gravida rutrum quisque non tellus. Donec massa sapien faucibus et molestie ac feugiat sed lectus.

                            Accumsan tortor posuere ac ut consequat semper. Vivamus arcu felis bibendum ut tristique et egestas. Tristique sollicitudin nibh sit amet commodo. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Facilisi nullam vehicula ipsum a. Vestibulum morbi blandit cursus risus at ultrices mi tempus imperdiet. Elit sed vulputate mi sit. Ultrices vitae auctor eu augue ut lectus arcu. Dui id ornare arcu odio. Vulputate sapien nec sagittis aliquam. Cursus turpis massa tincidunt dui. Mattis aliquam faucibus purus in massa tempor nec feugiat. Praesent elementum facilisis leo vel.

                            Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus. Porta nibh venenatis cras sed felis eget velit aliquet. Ipsum faucibus vitae aliquet nec. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a. Et malesuada fames ac turpis egestas. Tortor posuere ac ut consequat semper viverra nam libero. Lorem ipsum dolor sit amet. Vel pharetra vel turpis nunc eget lorem dolor sed viverra. Dignissim cras tincidunt lobortis feugiat. Montes nascetur ridiculus mus mauris vitae ultricies leo integer malesuada. Blandit aliquam etiam erat velit scelerisque. Sed odio morbi quis commodo odio aenean. Et malesuada fames ac turpis. Nec ullamcorper sit amet risus nullam eget felis eget.

                            Ipsum dolor sit amet consectetur adipiscing elit. Porttitor leo a diam sollicitudin. Arcu dictum varius duis at consectetur lorem donec massa. Purus in mollis nunc sed id semper. Aliquam malesuada bibendum arcu vitae elementum curabitur. Malesuada bibendum arcu vitae elementum. Felis donec et odio pellentesque diam volutpat commodo sed egestas. Vitae elementum curabitur vitae nunc. Consequat nisl vel pretium lectus quam id leo in vitae. Sed sed risus pretium quam vulputate dignissim. A cras semper auctor neque. Enim facilisis gravida neque convallis. Adipiscing bibendum est ultricies integer quis auctor.

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
                                            <textarea class="form-control w-100 text-center"
                                                > </textarea>
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
