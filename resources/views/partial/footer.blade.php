<footer class="footer-wrapper footer-layout2" data-bg-src="{{asset('assets/img/bg/footer2-bg.png')}}">
    <div class="container">
        <div class="text-center">
            <div class="footer-top-shape bg-repeat" data-bg-src="{{asset('assets/img/bg/jiji-bg.png')}}"></div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo"><a href="index.html.htm"><span
                                        data-mask-src="{{asset('assets/img/logo.svg')}}" class="logo-mask"></span> <img
                                        src="{{asset('assets/img/logo.svg')}}" alt="Bame"></a></div>
                            <p class="about-text">Beyond esports tournaments, include a broader calendar of gaming
                                events, conferences, and conventions.</p>
                            <h3 class="widget_title">Follow <span class="text-theme">With Us:</span></h3>
                            <div class="th-widget-contact">
                                <div class="th-social style-mask"><a class="facebook"
                                        href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a
                                        class="twitter" href="https://www.twitter.com/"><img
                                            src="{{asset('assets/img/icon/x-twitter-icon.svg')}}" alt="icon"></a><a
                                        class="instagram" href="https://www.instagram.com/"><img
                                            src="{{asset('assets/img/icon/instagram-icon.svg')}}" alt="icon"> </a><a
                                        class="linkedin" href="https://www.linkedin.com/"><i
                                            class="fab fa-linkedin"></i></a> <a class="google-play"
                                        href="https://www.google.com/"><img
                                            src="{{asset('assets/img/icon/google-playstore-icon.svg')}}" alt="icon"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Useful Link</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ route('players') }}"><i class="far fa-angle-right"></i>Players</a></li>
                                <li><a href="{{ route('gallery') }}"><i class="far fa-angle-right"></i>Gallery</a></li>
                                <li><a href="{{ route('points-table') }}"><i class="far fa-angle-right"></i>Points Table</a></li>
                                <li><a href="{{ route('about-us') }}"><i class="far fa-angle-right"></i>About Us</a></li>
                                <li><a href="{{ route('contact-us') }}"><i class="far fa-angle-right"></i>Contact Us</a>
                                </li>
                                <li><a href="blog.html.htm"><i class="far fa-angle-right"></i>Collectibles</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Supports</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ route('tournament') }}"><i class="far fa-angle-right"></i> Tournament</a>
                                </li>
                                <li><a href="{{ route('shop') }}"><i class="far fa-angle-right"></i> Shop</a>
                                </li>
                                <li><a href="{{ route('blog') }}"><i class="far fa-angle-right"></i> Blog</a>
                                </li>
                                <li><a href="{{ route('game') }}"><i class="far fa-angle-right"></i> Games</a>
                                </li>
                                @guest
                                <li><a href="{{ route('login') }}"><i class="far fa-angle-right"></i> Login</a></li>
                                <li><a href="{{ route('register') }}"><i class="far fa-angle-right"></i> Register</a></li>
                                @endguest
                                @auth
                                <li><a href="{{ route('wishlist') }}"><i class="far fa-angle-right"></i> Wishlist</a></li>
                                <li><a href="{{ route('cart') }}"><i class="far fa-angle-right"></i> Cart</a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget newsletter-widget footer-widget">
                        <h3 class="widget_title">Newsletter</h3>
                        <p class="footer-text">Subscribe to our newsletter to get our latest update & news consenter
                        </p>
                        <form class="newsletter-form">
                            <div class="form-group"><input class="form-control" type="email"
                                    placeholder="Email Address" required=""> <button type="submit" class="th-btn"><i
                                        class="fas fa-paper-plane"></i></button></div>
                            <div class="btn-wrap"><a href="#"><img src="{{asset('assets/img/normal/footer-apple-btn.png')}}"
                                        alt="img"></a><a href="#"><img
                                        src="{{asset('assets/img/normal/footer-playstore-btn.png')}}" alt="img"></a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap text-center bg-repeat" data-bg-src="{{asset('assets/img/bg/jiji-bg.png')}}">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <p class="copyright-text bg-repeat" data-bg-src="{{asset('assets/img/bg/jiji-bg.png')}}"><i
                            class="fal fa-copyright"></i> Copyright 2024 <a href="index.html.htm">Bame.</a> All
                        Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
