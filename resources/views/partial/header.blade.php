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
                                <li class="menu-item-has-children"><a href="index.html.htm">HOME</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html.htm">Home Esports</a></li>
                                        <li><a href="home-2.html.htm">Home Streaming</a></li>
                                        <li><a href="home-3.html.htm">Home Video Gaming</a></li>
                                        <li><a href="home-4.html.htm">Home Tournament</a></li>
                                        <li><a href="home-5.html.htm">Home Gamer</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html.htm">ABOUT US</a></li>
                                <li class="menu-item-has-children"><a href="#">TOURNAMENT</a>
                                    <ul class="sub-menu">
                                        <li><a href="tournament.html.htm">Tournament</a></li>
                                        <li><a href="tournament-details.html.htm">Tournament Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">BLOG</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html.htm">Blog</a></li>
                                        <li><a href="blog-details.html.htm">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">PAGES</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a href="#">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html.htm">Shop</a></li>
                                                <li><a href="shop-details.html.htm">Shop Details</a></li>
                                                <li><a href="cart.html.htm">Cart Page</a></li>
                                                <li><a href="checkout.html.htm">Checkout</a></li>
                                                <li><a href="wishlist.html.htm">Wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="team.html.htm">Players</a></li>
                                        <li><a href="team-details.html.htm">Players Details</a></li>
                                        <li><a href="game.html.htm">Game</a></li>
                                        <li><a href="game-details.html.htm">Game Details</a></li>
                                        <li><a href="gallery.html.htm">Gallery</a></li>
                                        <li><a href="point-table.html.htm">Point Table</a></li>
                                        <li><a href="error.html.htm">Error Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html.htm">CONTACT</a></li>
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
