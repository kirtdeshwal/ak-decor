    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay">
        
    </div>
    <div class="offcanvas-menu-wrapper">
        
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a class="authenticated" href="{{ route('cart') }}"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <div class="row justify-content-between">
            @if(Auth::check())
            <div class="dropdown mr-3">
                <a class="cursor-pointer" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="32px" viewBox="0 0 24 30" stroke-width="0.8" stroke="currentColor" class="w-2 h-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Hi, {{Auth::user()->first_name}}</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item cursor-pointer logout">Logout</a>
                </div>
            </div>
            @endif
            <a class="col-auto" href="{{ url('/') }}"><img src="{{ asset('img/logo_small.png') }}" height="24px" alt=""></a>
            </div>
        </div>
        
        <div id="mobile-menu-wrap"></div>
        @if(!Auth::check())
        <div class="offcanvas__auth">
            <a data-toggle="modal" class="cursor-pointer" data-target="#loginModalCenter">Login</a>
            <a data-toggle="modal" class="cursor-pointer" data-target="#registerModalCenter">Register</a>
        </div>
        @endif
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('img/ak_logo8.png') }}" height="33px" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="#">Women’s</a></li>
                            <li><a href="#">Men’s</a></li>
                            <li><a href="{{ url('/shop') }}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./product-details.html">Product Details</a></li>
                                    <li><a href="./shop-cart.html">Shop Cart</a></li>
                                    <li><a href="./checkout.html">Checkout</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        @if(Auth::check())
                        <div class="dropdown header__right__widget mr-3">
                            <a class="cursor-pointer" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="32px" viewBox="0 0 24 30" stroke-width="0.8" stroke="currentColor" class="w-2 h-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Hi, {{Auth::user()->first_name}}</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item cursor-pointer logout">Logout</a>
                            </div>
                        </div>
                        @else
                        <div class="header__right__auth">
                            <a data-toggle="modal" class="cursor-pointer" data-target="#loginModalCenter">Login</a>
                            <a data-toggle="modal" class="cursor-pointer" data-target="#registerModalCenter">Register</a>
                        </div>
                        @endif
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a class="authenticated" href="{{ route('cart') }}"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->