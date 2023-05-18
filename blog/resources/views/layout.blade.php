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
                            <li class="nav-item {{Request::routeIs('welcome.index') ? 'active' : ''}}">
                                <a href="{{route('welcome.index') }}" class="nav-link">Home</a>
                            
                            </li>
                            <li class="nav-item {{Request::routeIs('blog.index') ? 'active' : ''}}">
                                <a href="{{route('blog.index') }}" class="nav-link">Posts</a>
                            </li>
                            <li class="nav-item {{Request::routeIs('about') ? 'active' : ''}}">
                                <a href="{{route('about') }}" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item {{Request::routeIs('contact.index') ? 'active' : ''}}">
                                <a href="{{route('contact.index') }}" class="nav-link">Contact</a>
                            </li>
                            @guest
                            <li class="nav-item {{Request::routeIs('login') ? 'active' : ''}}">
                                <a href="{{route('login') }}" class="nav-link"> Login </a>
                            </li>
                            <li class="nav-item {{Request::routeIs('register') ? 'active' : ''}}">
                                <a href="{{route('register') }}" class="nav-link"> Register </a>
                            </li>
                            @endguest

                            @auth
                            <li class="nav-item {{Request::routeIs('dashboard') ? 'active' : ''}}">
                                <a href="{{route('dashboard') }}" class="nav-link"> Dashboard </a>
                            </li>
                            @endauth


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



        <!-- section starts  -->
        @yield('start-card')

        <!-- main content  -->
        @yield('main');

        <!-- instagram content -->
        <!-- <div class="instagram">
            <div class="container-xl">
                <a href="#" class="btn btn-default btn-instagram">@BlogName on Instagram</a>
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
        </div> -->
        @yield('instagram-content')

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
                <li class="{{Request::routeIs('welcome.index') ? 'active' : ''}}">
                    <a href="{{route('welcome.index') }}">Home</a>                            
                </li>
                <li class="{{Request::routeIs('blog.index') ? 'active' : ''}}">
                    <a href="{{route('blog.index') }}">Posts</a>
                </li>
                <li class="{{Request::routeIs('about') ? 'active' : ''}}">
                    <a href="{{route('about') }}">About Us</a>
                </li>
                <li class="{{Request::routeIs('contact.index') ? 'active' : ''}}">
                    <a href="{{route('contact.index') }}">Contact</a>
                </li>
                @guest
                <li class="{{Request::routeIs('login') ? 'active' : ''}}">
                    <a href="{{route('login') }}" > Login </a>
                </li>
                <li class="{{Request::routeIs('register') ? 'active' : ''}}">
                    <a href="{{route('register') }}"> Register </a>
                </li>
                @endguest
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