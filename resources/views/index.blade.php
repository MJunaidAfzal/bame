@extends('layouts.scaffold')
@push('title')
Home
@endpush
@section('content')

<div style="margin-top: 150px;" class="th-hero-wrapper hero-2" id="hero" data-bg-src="#">
    <div class="container-fluid">
        <div class="hero-style2">
            <div class="hero-title-thumb">
                <div class="character"><img  src="{{asset('assets/img/hero/hero-1-1.png')}}" alt="img"></div>
                <div class="title-img title-img-1 custom-anim-top wow animated" data-wow-duration="1.2s"
                    data-wow-delay="0.1s"><span class="title-img-mask"
                        data-mask-src="{{asset('assets/img/hero/hero-2-2.png')}}"></span> <img src="{{asset('assets/img/hero/hero-2-2.png')}}"
                        alt="img"></div>
                <div class="title-img title-img-2 custom-anim-top wow animated" data-wow-duration="1.2s"
                    data-wow-delay="0.5s"><span class="title-img-mask"
                        data-mask-src="{{asset('assets/img/hero/hero-2-3.png')}}"></span> <img src="{{asset('assets/img/hero/hero-2-3.png')}}"
                        alt="img"></div>
            </div>
            <div class="btn-group custom-anim-top wow animated" data-wow-duration="1.2s" data-wow-delay="0.5s"><a
                    href="contact.html.htm" class="th-btn style-border2"><span class="btn-border">CONTACT US <i
                            class="fa-solid fa-arrow-right ms-2"></i></span></a></div>
        </div>
    </div>
</div>
<div class="client-area-2 overflow-hidden bg-repeat" data-bg-src="{{asset('assets/img/bg/jiji-bg.png')}}">
    <div class="container-fluid p-0">
        <div class="swiper th-slider client-slider1"
            data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"400":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"7"},"1300":{"slidesPerView":"9"}}, "spaceBetween": "0", "loop": "true"}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-1.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-2.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-3.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-4.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-5.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-6.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-7.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-8.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-9.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-1.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-2.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-3.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-4.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-5.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-6.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-7.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-8.png')}}"
                            alt="Image"></a></div>
                <div class="swiper-slide"><a href="#" class="client-card"><img src="{{asset('assets/img/client/1-9.png')}}"
                            alt="Image"></a></div>
            </div>
        </div>
    </div>
</div>
<section class="game-area-2 space-top overflow-hidden">
    <div class="container">
        <div class="row justify-content-between align-items-center text-lg-start text-center">
            <div class="col-lg-auto">
                <div class="title-area custom-anim-left wow animated" data-wow-duration="1.5s"
                    data-wow-delay="0.2s"><span class="sub-title style2"># RELEASES THE LATEST GAME</span>
                    <h2 class="sec-title">Create & Manage upcoming game <span class="text-theme">!</span></h2>
                </div>
            </div>
            <div class="col-lg-auto">
                <div class="sec-btn custom-anim-right wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <a href="blog.html.htm" class="th-btn style-border"><span class="btn-border">SEE ALL GAME <i
                                class="fa-solid fa-arrow-right ms-2"></i></span></a></div>
            </div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="gameSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="game-card style2">
                            <div class="game-card-img"><a href="game-details.html.htm"><img
                                        src="{{asset('assets/img/game/2-1.png')}}" alt="game image"></a>
                                <div class="game-logo"><img src="{{asset('assets/img/game/logo2-1.png')}}" alt="game logo"></div>
                            </div>
                            <div class="game-card-details">
                                <div class="media-left">
                                    <h3 class="box-title"><a href="game-details.html.htm">The Hunter Killer</a></h3>
                                    <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                </div>
                                <div class="media-body"><span class="game-rating"><i class="fas fa-star"></i>
                                        4.8</span> <span class="review-count">(2.6k Review)</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="game-card style2">
                            <div class="game-card-img"><a href="game-details.html.htm"><img
                                        src="{{asset('assets/img/game/2-2.png')}}" alt="game image"></a>
                                <div class="game-logo"><img src="{{asset('assets/img/game/logo2-2.png')}}" alt="game logo"></div>
                            </div>
                            <div class="game-card-details">
                                <div class="media-left">
                                    <h3 class="box-title"><a href="game-details.html.htm">Lion The King</a></h3>
                                    <p class="game-content">Entry Fee:<span class="text-theme">Free</span></p>
                                </div>
                                <div class="media-body"><span class="game-rating"><i class="fas fa-star"></i>
                                        4.8</span> <span class="review-count">(2.6k Review)</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="game-card style2">
                            <div class="game-card-img"><a href="game-details.html.htm"><img
                                        src="{{asset('assets/img/game/2-3.png')}}" alt="game image"></a>
                                <div class="game-logo"><img src="{{asset('assets/img/game/logo2-3.png')}}" alt="game logo"></div>
                            </div>
                            <div class="game-card-details">
                                <div class="media-left">
                                    <h3 class="box-title"><a href="game-details.html.htm">Duty Balck Ops</a></h3>
                                    <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                </div>
                                <div class="media-body"><span class="game-rating"><i class="fas fa-star"></i>
                                        4.8</span> <span class="review-count">(2.6k Review)</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="game-card style2">
                            <div class="game-card-img"><a href="game-details.html.htm"><img
                                        src="{{asset('assets/img/game/2-4.png')}}" alt="game image"></a>
                                <div class="game-logo"><img src="{{asset('assets/img/game/logo2-4.png')}}" alt="game logo"></div>
                            </div>
                            <div class="game-card-details">
                                <div class="media-left">
                                    <h3 class="box-title"><a href="game-details.html.htm">Crazy Wild</a></h3>
                                    <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                </div>
                                <div class="media-body"><span class="game-rating"><i class="fas fa-star"></i>
                                        4.8</span> <span class="review-count">(2.6k Review)</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="game-card style2">
                            <div class="game-card-img"><a href="game-details.html.htm"><img
                                        src="{{asset('assets/img/game/2-5.png')}}" alt="game image"></a>
                                <div class="game-logo"><img src="{{asset('assets/img/game/logo2-5.png')}}" alt="game logo"></div>
                            </div>
                            <div class="game-card-details">
                                <div class="media-left">
                                    <h3 class="box-title"><a href="game-details.html.htm">Plants War</a></h3>
                                    <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                </div>
                                <div class="media-body"><span class="game-rating"><i class="fas fa-star"></i>
                                        4.8</span> <span class="review-count">(2.6k Review)</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="game-card style2">
                            <div class="game-card-img"><a href="game-details.html.htm"><img
                                        src="{{asset('assets/img/game/2-6.png')}}" alt="game image"></a>
                                <div class="game-logo"><img src="{{asset('assets/img/game/logo2-6.png')}}" alt="game logo"></div>
                            </div>
                            <div class="game-card-details">
                                <div class="media-left">
                                    <h3 class="box-title"><a href="game-details.html.htm">Royal Treasures</a></h3>
                                    <p class="game-content">Entry Fee:<span class="text-theme">Free</span></p>
                                </div>
                                <div class="media-body"><span class="game-rating"><i class="fas fa-star"></i>
                                        4.8</span> <span class="review-count">(2.6k Review)</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
    <div class="overflow-hidden space" id="about-sec">
        <div class="about-bg-img shape-mockup" data-top="0" data-left="0"><img src="{{asset('assets/img/bg/about-bg1.png')}}')}}"
                alt=""></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-50 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1 custom-anim-left wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <img src="{{asset('assets/img/normal/about1-1.png')}}" alt="About"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-wrap1">
                        <div class="about-title-wrap mb-n1">
                            <div class="about-title-thumb custom-anim-top wow animated" data-wow-duration="1.5s"
                                data-wow-delay="0.1s"><img src="{{asset('assets/img/normal/about1-2.png')}}" alt="img"></div>
                            <div class="title-area custom-anim-left wow animated" data-wow-duration="1.5s"
                                data-wow-delay="0.1s"><span class="sub-title"># About Our Gaming Site</span>
                                <h2 class="sec-title mb-0">Forging Legends in the Gaming Universe</h2>
                            </div>
                        </div>
                        <div class="about-grid">
                            <div class="icon custom-anim-top wow animated" data-wow-duration="1.5s"
                                data-wow-delay="0.2s"><img src="{{asset('assets/img/icon/about_feature_1.svg')}}" alt="img"></div>
                            <div class="about-grid-details custom-anim-left wow animated" data-wow-duration="1.5s"
                                data-wow-delay="0.2s">
                                <h3 class="about-grid_title h5">Over <span class="text-theme">1k+</span> Affiliate Game
                                    Programs</h3>
                                <p class="about-grid_text">Keep users informed about the gaming industry with news
                                    articles on releases, updates, and events.</p>
                            </div>
                        </div>
                        <div class="about-grid">
                            <div class="icon custom-anim-top wow animated" data-wow-duration="1.5s"
                                data-wow-delay="0.2s"><img src="{{asset('assets/img/icon/about_feature_2.svg')}}" alt="img"></div>
                            <div class="about-grid-details custom-anim-left wow animated" data-wow-duration="1.5s"
                                data-wow-delay="0.2s">
                                <h3 class="about-grid_title h5">Great Tournaments</h3>
                                <p class="about-grid_text">Display a calendar of upcoming tournaments with dates, times,
                                    and game titles and provide live updates.</p>
                            </div>
                        </div>
                        <div class="about-grid">
                            <div class="icon custom-anim-top wow animated" data-wow-duration="1.5s"
                                data-wow-delay="0.2s"><img src="{{asset('assets/img/icon/about_feature_3.svg')}}" alt="img"></div>
                            <div class="about-grid-details custom-anim-left wow animated" data-wow-duration="1.5s"
                                data-wow-delay="0.2s">
                                <h3 class="about-grid_title h5">Get Online Supports</h3>
                                <p class="about-grid_text">Create profiles for professional esports players, including
                                    their bios, achievements, and current teams.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <section class="space bg-top-center" data-bg-src="{{asset('assets/img/bg/tournament-sec1-bg.png')}}">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-auto">
                    <div class="title-area text-lg-start text-center custom-anim-left wow animated"
                        data-wow-duration="1.5s" data-wow-delay="0.2s"><span class="sub-title"># Game Streaming
                            Battle</span>
                        <h2 class="sec-title">Our Gaming Tournaments <span class="text-theme">!</span></h2>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="sec-btn custom-anim-right wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="tournament-filter-btn filter-menu filter-menu-active"><button data-filter="*"
                                class="tab-btn active" type="button">ALL MATCH</button> <button data-filter=".cat1"
                                class="tab-btn" type="button">UPCOMING MATCH</button> <button data-filter=".cat2"
                                class="tab-btn" type="button">FINISHED MATCH</button></div>
                    </div>
                </div>
            </div>
            <div class="row gy-4 filter-active">
                <div class="col-12 filter-item cat1">
                    <div class="tournament-card gradient-border">
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-1.png')}}"
                                alt="tournament image"> <img src="{{asset('assets/img/tournament/game-vs1.svg')}}"
                                alt="tournament image"> <img src="{{asset('assets/img/tournament/1-2.png')}}" alt="tournament image">
                        </div>
                        <div class="tournament-card-content">
                            <div class="tournament-card-details">
                                <div class="tournament-card-meta"><span class="tournament-card-tag">Upcoming</span>
                                    <span class="tournament-card-score gradient-border">0 / 0</span></div>
                                <h3 class="tournament-card-title"><a href="tournament-details.html.htm">Pro Player VS
                                        Lion King</a></h3>
                                <p class="tournament-card-date">23 December, 2024 <span class="text-theme">6:00
                                        PM</span></p>
                                <div class="th-social"><a href="https://www.youtube.com/"><i
                                            class="fab fa-youtube"></i>Youtube</a> <a
                                        href="tournament-details.html.htm"><i class="fa-brands fa-twitch"></i>Twitch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 filter-item cat2">
                    <div class="tournament-card gradient-border">
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-3.png')}}"
                                alt="tournament image"> <img src="{{asset('assets/img/tournament/game-vs1.svg')}}"
                                alt="tournament image"> <img src="{{asset('assets/img/tournament/1-4.png')}}" alt="tournament image">
                        </div>
                        <div class="tournament-card-content">
                            <div class="tournament-card-details">
                                <div class="tournament-card-meta"><span class="tournament-card-tag">Finished</span>
                                    <span class="tournament-card-score gradient-border">20 / 22</span></div>
                                <h3 class="tournament-card-title"><a href="tournament-details.html.htm">Assassin King VS
                                        Cyberpunk</a></h3>
                                <p class="tournament-card-date">20 December, 2024 <span class="text-theme">6:00
                                        PM</span></p>
                                <div class="th-social"><a href="https://www.youtube.com/"><i
                                            class="fab fa-youtube"></i>Youtube</a> <a
                                        href="tournament-details.html.htm"><i class="fa-brands fa-twitch"></i>Twitch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 filter-item cat1">
                    <div class="tournament-card gradient-border">
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-5.png')}}"
                                alt="tournament image"> <img src="{{asset('assets/img/tournament/game-vs1.svg')}}"
                                alt="tournament image"> <img src="{{asset('assets/img/tournament/1-6.png')}}" alt="tournament image">
                        </div>
                        <div class="tournament-card-content">
                            <div class="tournament-card-details">
                                <div class="tournament-card-meta"><span class="tournament-card-tag">Upcoming</span>
                                    <span class="tournament-card-score gradient-border">0 / 0</span></div>
                                <h3 class="tournament-card-title"><a href="tournament-details.html.htm">Team Gorilla VS
                                        Badgamer</a></h3>
                                <p class="tournament-card-date">23 December, 2024 <span class="text-theme">6:00
                                        PM</span></p>
                                <div class="th-social"><a href="https://www.youtube.com/"><i
                                            class="fab fa-youtube"></i>Youtube</a> <a
                                        href="tournament-details.html.htm"><i class="fa-brands fa-twitch"></i>Twitch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid p-0">
        <div class="gallery-area-1 overflow-hidden text-center">
            <div class="slider-area gallery-slider1">
                <div class="swiper th-slider" id="gallerySlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"0","depth":"150","modifier":"1"},"centeredSlides":"true"}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video"><img src="{{asset('assets/img/video/1-1.png')}}" alt="img"> <a
                                    href="{{asset('assets/img/video/1-1.png')}}" class="play-btn popup-image style3"><i
                                        class="fa-solid fa-arrow-up-right"></i></a></div>
                        </div>
                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video"><img src="{{asset('assets/img/video/1-2.png')}}" alt="img"> <a
                                    href="{{asset('assets/img/video/1-2.png')}}" class="play-btn popup-image style3"><i
                                        class="fa-solid fa-arrow-up-right"></i></a></div>
                        </div>
                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video"><img src="{{asset('assets/img/video/1-3.png')}}" alt="img"> <a
                                    href="{{asset('assets/img/video/1-3.png')}}" class="play-btn popup-image style3"><i
                                        class="fa-solid fa-arrow-up-right"></i></a></div>
                        </div>
                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video"><img src="{{asset('assets/img/video/1-1.png')}}" alt="img"> <a
                                    href="{{asset('assets/img/video/1-1.png')}}" class="play-btn popup-image style3"><i
                                        class="fa-solid fa-arrow-up-right"></i></a></div>
                        </div>
                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video"><img src="{{asset('assets/img/video/1-2.png')}}" alt="img"> <a
                                    href="{{asset('assets/img/video/1-2.png')}}" class="play-btn popup-image style3"><i
                                        class="fa-solid fa-arrow-up-right"></i></a></div>
                        </div>
                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video"><img src="{{asset('assets/img/video/1-3.png')}}" alt="img"> <a
                                    href="{{asset('assets/img/video/1-3.png')}}" class="play-btn popup-image style3"><i
                                        class="fa-solid fa-arrow-up-right"></i></a></div>
                        </div>
                    </div>
                </div><button data-slider-prev="#gallerySlider1" class="slider-arrow slider-prev"><i
                        class="fas fa-angle-left"></i></button> <button data-slider-next="#gallerySlider1"
                    class="slider-arrow slider-next"><i class="fas fa-angle-right"></i></button>
            </div>
        </div>
    </div>
    <section class="team-sec-1 space">
        <div class="team-shape1-1 shape-mockup" data-top="0" data-right="0"><img src="{{asset('assets/img/bg/team-sec1-bg.png')}}"
                alt="img"></div>
        <div class="container th-container3">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <div class="title-area text-center custom-anim-top wow animated" data-wow-duration="1.5s"
                        data-wow-delay="0.2s"><span class="sub-title"># Top World Class Gamer</span>
                        <h2 class="sec-title">Let’s See Our Pro Players</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area team-slider1">
                <div class="swiper th-slider has-shadow" id="teamSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img"><img src="{{asset('assets/img/team/1-1.png')}}" alt="Team"></div><img
                                        class="game-logo" src="{{asset('assets/img/team/game-logo1-1.png')}}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html.htm">Max Alexis</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img"><img src="{{asset('assets/img/team/1-2.png')}}" alt="Team"></div><img
                                        class="game-logo" src="{{asset('assets/img/team/game-logo1-2.png')}}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html.htm">Wilium Lili</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img"><img src="{{asset('assets/img/team/1-3.png')}}" alt="Team"></div><img
                                        class="game-logo" src="{{asset('assets/img/team/game-logo1-3.png')}}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html.htm">Mac Marsh</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img"><img src="{{asset('assets/img/team/1-4.png')}}" alt="Team"></div><img
                                        class="game-logo" src="{{asset('assets/img/team/game-logo1-4.png')}}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html.htm">Eva Raina</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img"><img src="{{asset('assets/img/team/1-5.png')}}" alt="Team"></div><img
                                        class="game-logo" src="{{asset('assets/img/team/game-logo1-5.png')}}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html.htm">Robin Cloth</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img"><img src="{{asset('assets/img/team/1-1.png')}}" alt="Team"></div><img
                                        class="game-logo" src="{{asset('assets/img/team/game-logo1-1.png')}}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html.htm">Max Alexis</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img"><img src="{{asset('assets/img/team/1-2.png')}}" alt="Team"></div><img
                                        class="game-logo" src="{{asset('assets/img/team/game-logo1-2.png')}}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html.htm">Wilium Lili</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img"><img src="{{asset('assets/img/team/1-3.png')}}" alt="Team"></div><img
                                        class="game-logo" src="{{asset('assets/img/team/game-logo1-3.png')}}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html.htm">Mac Marsh</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img"><img src="{{asset('assets/img/team/1-4.png')}}" alt="Team"></div><img
                                        class="game-logo" src="{{asset('assets/img/team/game-logo1-4.png')}}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html.htm">Eva Raina</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img"><img src="{{asset('assets/img/team/1-5.png')}}" alt="Team"></div><img
                                        class="game-logo" src="{{asset('assets/img/team/game-logo1-5.png')}}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html.htm">Robin Cloth</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><i
                        class="far fa-arrow-left"></i></button> <button data-slider-next="#teamSlider1"
                    class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>
    <div class="container th-container4">
        <div class="cta-area-1">
            <div class="cta-bg-shape-border"><svg width="1464" height="564" viewbox="0 0 1464 564" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1463.5 30V534C1463.5 550.292 1450.29 563.5 1434 563.5H1098H927.426C919.603 563.5 912.099 560.392 906.567 554.86L884.14 532.433C878.42 526.713 870.663 523.5 862.574 523.5H601.426C593.337 523.5 585.58 526.713 579.86 532.433L557.433 554.86C551.901 560.392 544.397 563.5 536.574 563.5H366H30C13.7076 563.5 0.5 550.292 0.5 534V30C0.5 13.7076 13.7076 0.5 30 0.5H366H536.574C544.397 0.5 551.901 3.60802 557.433 9.14034L579.86 31.5668C585.58 37.2866 593.337 40.5 601.426 40.5H862.574C870.663 40.5 878.42 37.2866 884.14 31.5668L906.567 9.14035C912.099 3.60803 919.603 0.5 927.426 0.5H1098H1434C1450.29 0.5 1463.5 13.7076 1463.5 30Z"
                        stroke="url(#paint0_linear_202_547)"></path>
                    <defs>
                        <lineargradient id="paint0_linear_202_547" x1="0" y1="0" x2="1505.47" y2="412.762"
                            gradientunits="userSpaceOnUse">
                            <stop offset="0" stop-color="var(--theme-color)"></stop>
                            <stop offset="1" stop-color="var(--theme-color2)"></stop>
                        </lineargradient>
                    </defs>
                </svg></div>
            <div class="cta-wrap-bg bg-repeat" data-bg-src="{{asset('assets/img/bg/jiji-bg.png')}}"
                data-mask-src="{{asset('assets/img/shape/cta-bg-shape1.svg')}}">
                <div class="cta-bg-img"><img src="{{asset('assets/img/bg/cta-sec1-bg.png')}}" alt="img"></div>
                <div class="cta-thumb"><img src="{{asset('assets/img/normal/cta1-1.png')}}" alt="img"></div>
            </div>
            <div class="cta-wrap">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="title-area mb-0 custom-anim-left wow animated" data-wow-duration="1.5s"
                            data-wow-delay="0.2s"><span class="sub-title"># World Best Gaming Site</span>
                            <h2 class="sec-title">Join Bame Esports to Become Next <span
                                    class="text-theme fw-medium">PRO Gamer Today !</span></h2>
                            <p class="mt-30 mb-30">Esports and gaming facilities requires thoughtful consideration of
                                various elements to create an environment that caters to the needs of gamers and
                                enhances the overall gaming experience.</p><a href="contact.html.htm"
                                class="th-btn">JOIN COMMUNITY <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <img src="{{ asset('assets/img/gallery/gallery_3_2.jpg') }}" alt="">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-auto">
                    <div class="title-area custom-anim-left wow animated text-md-start text-center"
                        data-wow-duration="1.5s" data-wow-delay="0.2s"><span class="sub-title"># Gamer Shop</span>
                        <h2 class="sec-title">Our Latest Gaming Products <span class="text-theme">!</span></h2>
                    </div>
                </div>
                <div class="col-md-auto d-none d-md-block">
                    <div class="sec-btn">
                        <div class="icon-box"><button data-slider-prev="#productSlider1"
                                class="slider-arrow style2 default"><i class="far fa-arrow-left"></i></button> <button
                                data-slider-next="#productSlider1" class="slider-arrow style2 default"><i
                                    class="far fa-arrow-right"></i></button></div>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider has-shadow" id="productSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img"><img src="{{asset('assets/img/product/product_1_1.png')}}" alt="Product Image">
                                <div class="overlay gradient-border"></div>
                                <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                            class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                        class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                        class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-details.html.htm">Gaming Headphone</a></h3><span
                                    class="price">$177.85</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img"><img src="{{asset('assets/img/product/product_1_2.png')}}" alt="Product Image">
                                <div class="overlay gradient-border"></div>
                                <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                            class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                        class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                        class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-details.html.htm">Gaming Mouse</a></h3><span
                                    class="price">$120.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img"><img src="{{asset('assets/img/product/product_1_3.png')}}" alt="Product Image">
                                <div class="overlay gradient-border"></div>
                                <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                            class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                        class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                        class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-details.html.htm">Gaming Keyboard</a></h3><span
                                    class="price">$96.85</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img"><img src="{{asset('assets/img/product/product_1_4.png')}}" alt="Product Image">
                                <div class="overlay gradient-border"></div>
                                <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                            class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                        class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                        class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-details.html.htm">Gaming Chair</a></h3><span
                                    class="price">$08.85<del>$06.99</del></span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img"><img src="{{asset('assets/img/product/product_1_5.png')}}" alt="Product Image">
                                <div class="overlay gradient-border"></div>
                                <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                            class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                        class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                        class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-details.html.htm">Microphone G9000</a></h3><span
                                    class="price">$32.85</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img"><img src="{{asset('assets/img/product/product_1_6.png')}}" alt="Product Image">
                                <div class="overlay gradient-border"></div>
                                <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                            class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                        class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                        class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-details.html.htm">Play Station Controller</a>
                                </h3><span class="price">$30.85</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img"><img src="{{asset('assets/img/product/product_1_7.png')}}" alt="Product Image">
                                <div class="overlay gradient-border"></div>
                                <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                            class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                        class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                        class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-details.html.htm">PlayStation VR</a></h3><span
                                    class="price">$232.85</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img"><img src="{{asset('assets/img/product/product_1_8.png')}}" alt="Product Image">
                                <div class="overlay gradient-border"></div>
                                <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                            class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                        class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                        class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-details.html.htm">Wireless speaker</a></h3><span
                                    class="price">$30.85</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-md-none mt-40 text-center">
                <div class="icon-box"><button data-slider-prev="#productSlider1" class="slider-arrow style2 default"><i
                            class="far fa-arrow-left"></i></button> <button data-slider-next="#productSlider1"
                        class="slider-arrow style2 default"><i class="far fa-arrow-right"></i></button></div>
            </div>
        </div>
    </section>
    <section class="" id="blog-sec">
        <div class="container">
            <div class="title-area text-center custom-anim-top wow animated" data-wow-duration="1.5s"
                data-wow-delay="0.2s"><span class="sub-title"># Latest News</span>
                <h2 class="sec-title">Stay Updated With Our Blog <span class="text-theme">!</span></h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img"><a href="blog-details.html.htm"><img
                                            src="{{asset('assets/img/blog/blog_1_1.jpg')}}" alt="blog image"></a></div>
                                <div class="blog-content">
                                    <div class="blog-meta"><a href="blog.html.htm"><i class="far fa-user"></i>By
                                            Jonson</a> <a href="blog.html.htm"><i class="far fa-calendar"></i>30 Nov,
                                            2024</a></div>
                                    <h3 class="blog-title"><a href="blog-details.html.htm">Strategies for Dominating
                                            Your Favorite Game</a></h3><a href="blog-details.html.htm"
                                        class="link-btn style2">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img"><a href="blog-details.html.htm"><img
                                            src="{{asset('assets/img/blog/blog_1_2.jpg')}}" alt="blog image"></a></div>
                                <div class="blog-content">
                                    <div class="blog-meta"><a href="blog.html.htm"><i class="far fa-user"></i>By
                                            Jonson</a> <a href="blog.html.htm"><i class="far fa-calendar"></i>25 Dec,
                                            2024</a></div>
                                    <h3 class="blog-title"><a href="blog-details.html.htm">Breaking Barriers and Shaping
                                            the Future</a></h3><a href="blog-details.html.htm"
                                        class="link-btn style2">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img"><a href="blog-details.html.htm"><img
                                            src="{{asset('assets/img/blog/blog_1_3.jpg')}}" alt="blog image"></a></div>
                                <div class="blog-content">
                                    <div class="blog-meta"><a href="blog.html.htm"><i class="far fa-user"></i>By
                                            Jonson</a> <a href="blog.html.htm"><i class="far fa-calendar"></i>23 Jun,
                                            2024</a></div>
                                    <h3 class="blog-title"><a href="blog-details.html.htm">Taking Customization to the
                                            Next Level</a></h3><a href="blog-details.html.htm"
                                        class="link-btn style2">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img"><a href="blog-details.html.htm"><img
                                            src="{{asset('assets/img/blog/blog_1_1.jpg')}}" alt="blog image"></a></div>
                                <div class="blog-content">
                                    <div class="blog-meta"><a href="blog.html.htm"><i class="far fa-user"></i>By
                                            Jonson</a> <a href="blog.html.htm"><i class="far fa-calendar"></i>30 Nov,
                                            2024</a></div>
                                    <h3 class="blog-title"><a href="blog-details.html.htm">Strategies for Dominating
                                            Your Favorite Game</a></h3><a href="blog-details.html.htm"
                                        class="link-btn style2">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img"><a href="blog-details.html.htm"><img
                                            src="{{asset('assets/img/blog/blog_1_2.jpg')}}" alt="blog image"></a></div>
                                <div class="blog-content">
                                    <div class="blog-meta"><a href="blog.html.htm"><i class="far fa-user"></i>By
                                            Jonson</a> <a href="blog.html.htm"><i class="far fa-calendar"></i>25 Dec,
                                            2024</a></div>
                                    <h3 class="blog-title"><a href="blog-details.html.htm">Breaking Barriers and Shaping
                                            the Future</a></h3><a href="blog-details.html.htm"
                                        class="link-btn style2">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img"><a href="blog-details.html.htm"><img
                                            src="{{asset('assets/img/blog/blog_1_3.jpg')}}" alt="blog image"></a></div>
                                <div class="blog-content">
                                    <div class="blog-meta"><a href="blog.html.htm"><i class="far fa-user"></i>By
                                            Jonson</a> <a href="blog.html.htm"><i class="far fa-calendar"></i>23 Jun,
                                            2024</a></div>
                                    <h3 class="blog-title"><a href="blog-details.html.htm">Taking Customization to the
                                            Next Level</a></h3><a href="blog-details.html.htm"
                                        class="link-btn style2">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
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
