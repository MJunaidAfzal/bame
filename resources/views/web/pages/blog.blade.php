@extends('layouts.scaffold')
@push('title')
    {{ $title ?? '' }}
@endpush
@section('content')


    <div style="margin-top:150px; " class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/bg/bg13.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">BLOG STANDARD</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="th-blog-wrapper space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="blog-details.html.htm"><img src="{{asset('assets/img/blog/blog-s-1-1.jpg')}}"
                                    alt="Blog Image"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta"><a class="author" href="blog.html.htm"><i
                                        class="fa-light fa-user"></i>By Jonson</a> <a href="blog.html.htm"><i
                                        class="fa-light fa-calendar"></i>21 Nov, 2024</a> <a
                                    href="blog-details.html.htm"><i class="fa-light fa-comment"></i>3 Comments</a></div>
                            <h2 class="blog-title"><a href="blog-details.html.htm">Strategies for Dominating Your
                                    Favorite Game</a></h2>
                            <p class="blog-text">Successful esports teams exhibit strong communication, strategic
                                coordination, and individual player skills. Team chemistry, effective coaching, and
                                adaptability to changing meats are also crucial factors.</p><a
                                href="blog-details.html.htm" class="link-btn style2">Read More<i
                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img th-slider" data-slider-options='{"effect":"fade"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><a href="blog-details.html.htm"><img
                                            src="{{asset('assets/img/blog/blog-s-1-2.jpg')}}" alt="Blog Image"></a></div>
                                <div class="swiper-slide"><a href="blog-details.html.htm"><img
                                            src="{{asset('assets/img/blog/blog-s-1-4.jpg')}}" alt="Blog Image"></a></div>
                            </div><button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a class="author" href="blog.html.htm"><i
                                        class="fa-light fa-user"></i>By Jonson</a> <a href="blog.html.htm"><i
                                        class="fa-light fa-calendar"></i>22 Dec, 2024</a> <a
                                    href="blog-details.html.htm"><i class="fa-light fa-comment"></i>3 Comments</a></div>
                            <h2 class="blog-title"><a href="blog-details.html.htm">Influential Figures in the History of
                                    Gaming</a></h2>
                            <p class="blog-text">Providing opportunities for professional growth a maintaining positive
                                work environment, To enhance online presence, consider optimizing your web utilizing
                                social with your channels. An effective marketing involves market research target
                                audience identification, competitive</p><a href="blog-details.html.htm"
                                class="link-btn style2">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="th-blog blog-single">
                        <div class="blog-content">
                            <div class="blog-meta"><a class="author" href="blog.html.htm"><i
                                        class="fa-light fa-user"></i>By Jonson</a> <a href="blog.html.htm"><i
                                        class="fa-light fa-calendar"></i>24 June, 2024</a> <a
                                    href="blog-details.html.htm"><i class="fa-light fa-comment"></i>3 Comments</a></div>
                            <h2 class="blog-title"><a href="blog-details.html.htm">Must-Visit Gaming Events
                                    Worldwide</a></h2>
                            <p class="blog-text">An effective marketing involves market research target audience
                                identification, competitive. providing opportunities for professional growth a
                                maintaining positive work environment. To enhance online presence, consider optimizing
                                your web utilizing social with your channels</p><a href="blog-details.html.htm"
                                class="link-btn style2">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img" data-overlay="black" data-opacity="5"><a href="blog-details.html.htm"><img
                                    src="{{asset('assets/img/blog/blog-s-1-3.jpg')}}" alt="Blog Image"></a><a
                                href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                                    class="fas fa-play"></i></a></div>
                        <div class="blog-content">
                            <div class="blog-meta"><a class="author" href="blog.html.htm"><i
                                        class="fa-light fa-user"></i>By Jonson</a> <a href="blog.html.htm"><i
                                        class="fa-light fa-calendar"></i>09 Sep, 2024</a> <a
                                    href="blog-details.html.htm"><i class="fa-light fa-comment"></i>3 Comments</a></div>
                            <h2 class="blog-title"><a href="blog-details.html.htm">Behind the Scenes of Your Favorite
                                    Titles</a></h2>
                            <p class="blog-text">From strategic planning to operational optimization, our business
                                consulting team is committed to guiding you through every stage of development, ensuring
                                sustainable growth.Our seasoned consultants bring a wealth of experience to the table.
                            </p><a href="blog-details.html.htm" class="link-btn style2">Read More<i
                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-audio"><iframe title="Tell Me U Luv Me (with Trippie Redd) by Juice WRLD"
                                src="https://w.soundcloud.com/player/?visual=true&url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F830279092&show_artwork=true&maxwidth=751&maxheight=1000&dnt=1"></iframe>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a class="author" href="blog.html.htm"><i
                                        class="fa-light fa-user"></i>By Jonson</a> <a href="blog.html.htm"><i
                                        class="fa-light fa-calendar"></i>10 Sep, 2024</a> <a
                                    href="blog-details.html.htm"><i class="fa-light fa-comment"></i>3 Comments</a></div>
                            <h2 class="blog-title"><a href="blog-details.html.htm">Discover unparalleled expertise in
                                    market</a></h2>
                            <p class="blog-text">Take the first step towards a brighter business future. Contact us
                                today to explore how our business consulting services can drive innovation, increase
                                efficiency, and position your company for enduring success. At the core of our business
                                consulting philosophy.</p><a href="blog-details.html.htm" class="link-btn style2">Read
                                More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="th-pagination">
                        <ul>
                            <li><a href="blog.html.htm"><span class="btn-border"></span> 1</a></li>
                            <li><a href="blog.html.htm"><span class="btn-border"></span> 2</a></li>
                            <li><a href="blog.html.htm"><span class="btn-border"></span> 3</a></li>
                            <li><a href="blog.html.htm"><span class="btn-border"></span><i
                                        class="far fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form"><input type="text" placeholder="Search here..."> <button
                                    type="submit"><i class="far fa-search"></i></button></form>
                        </div>
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li><a href="blog.html.htm">LIVE GAME</a> <span>(2)</span></li>
                                <li><a href="blog.html.htm">FANTASY</a> <span>(2)</span></li>
                                <li><a href="blog.html.htm">GAMING</a> <span>(2)</span></li>
                                <li><a href="blog.html.htm">MX-XBOX</a> <span>(2)</span></li>
                                <li><a href="blog.html.htm">SHOOTING</a> <span>(2)</span></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html.htm"><img
                                                src="{{asset('assets/img/blog/recent-post-1-1.jpg')}}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html.htm">A
                                                Day in the Life of an Esports Event</a></h4>
                                        <div class="recent-post-meta"><a href="blog.html.htm"><i
                                                    class="fa-light fa-calendar"></i>30 Nov, 2024</a></div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html.htm"><img
                                                src="{{asset('assets/img/blog/recent-post-1-2.jpg')}}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit"
                                                href="blog-details.html.htm">Influential Figures in the History</a></h4>
                                        <div class="recent-post-meta"><a href="blog.html.htm"><i
                                                    class="fa-light fa-calendar"></i>05 Dec, 2024</a></div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html.htm"><img
                                                src="{{asset('assets/img/blog/recent-post-1-3.jpg')}}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit"
                                                href="blog-details.html.htm">Behind the Scenes of Your Favorite</a></h4>
                                        <div class="recent-post-meta"><a href="blog.html.htm"><i
                                                    class="fa-light fa-calendar"></i>09 Sep, 2024</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud"><a href="blog.html.htm">GAME APP</a> <a
                                    href="blog.html.htm">E-SPORTS</a> <a href="blog.html.htm">TOURNAMENTS</a> <a
                                    href="blog.html.htm">MATCH</a> <a href="blog.html.htm">3D</a> <a
                                    href="blog.html.htm">GAME ANIMATION</a></div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>


@endsection
