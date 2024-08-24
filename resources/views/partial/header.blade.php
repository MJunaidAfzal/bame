<header class="th-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <p class="header-notice"></p>
                    <div class="header-links">
                        <ul>
                            <li>
                                <div class="header-notice">Welcome to our <a href="index.html.htm">Bame</a> Esports
                                    team</div>
                            </li>
                            <li>
                                <div class="dropdown-link"><a class="dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-solid fa-globe"></i> English</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                        <li><a href="#">German</a> <a href="#">French</a> <a href="#">Italian</a> <a
                                                href="#">Latvian</a> <a href="#">Spanish</a> <a href="#">Greek</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            @guest
                            <li>
                                <a href="{{ route('login') }}"><i class="fal fa-user"></i> Login</a></li>
                            <li><a href="{{ route('register') }}"><i class="fal fa-user"></i> Register</a></li>
                            @endguest
                            @auth
                            <li>
                                <a href="#"><i class="fal fa-user"></i> Welcome! {{ auth()->user()->name }}</a></li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fal fa-sign-out"></i> Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo"><a href="{{ route('index') }}"><span data-mask-src="{{asset('assets/img/logo.svg')}}"
                                    class="logo-mask"></span> <img src="{{asset('assets/img/logo.svg')}}" alt="Bame"></a></div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li class="menu-item"><a href="{{ route('index') }}">HOME</a>
                                </li>
                                <li class="menu-item-has-children"><a href="#">PAGES</a>
                                    <ul class="sub-menu">

                                        <li><a href="{{ route('players') }}">Players</a></li>
                                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                        <li><a href="{{ route('points-table') }}">Point Table</a></li>
                                        <li><a href="{{ route('about-us') }}">About Us</a></li>
                                        <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                                    @guest
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    @endguest
                                    @auth
                                    <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                    <li><a href="{{ route('cart') }}">Cart</a></li>
                                    @endauth

                                    </ul>
                                </li>
                                <li class="menu-item"><a href="{{ route('tournament') }}">TOURNAMENT</a>
                                    <li class="menu-item"><a href="{{ route('shop') }}">SHOP</a>
                                </li>
                                <li class="menu-item"><a href="{{ route('blog') }}">BLOG</a>
                                </li>

                                <li><a href="{{ route('game') }}">GAMES</a></li>
                            </ul>
                        </nav>
                        <div class="header-button d-flex d-lg-none"><button type="button"
                                class="th-menu-toggle"><span class="btn-border"></span><i
                                    class="far fa-bars"></i></button></div>
                    </div>
                    {{-- <div class="col-auto d-none d-xl-block">
                        <div class="header-button"><button type="button" class="simple-icon searchBoxToggler"><i
                                    class="far fa-search"></i></button> <button type="button"
                                class="simple-icon sideMenuInfo"><i class="fa-solid fa-bars"></i></button>
                            <div class="d-xxl-block d-none"><a href="contact.html.htm" class="th-btn"><i
                                        class="fa-brands fa-twitch me-1"></i> Live Streaming</a></div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
    </div>
</header>
