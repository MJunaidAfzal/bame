@extends('layouts.scaffold')
@push('title')
    {{ $title ?? '' }}
@endpush
@section('content')


    <div style="margin-top: 150px;" class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/bg/bg7.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">TOURNAMENT MATCH</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>TOURNAMENT MATCH</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="tournament-sec-v2 space-top space-extra2-bottom" data-bg-src="{{asset('assets/img/bg/tournament-sec2-bg.png')}}">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="title-area text-center"><span class="sub-title style2"># Game Streaming Battle</span>
                        <h2 class="sec-title">Our Gaming Tournaments <span class="text-theme">!</span></h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tournament-filter-btn2 filter-menu filter-menu-active"><button data-filter="*"
                            class="tab-btn th-btn style-border3 active" type="button"><span class="btn-border">ALL MATCH
                                <i class="fa-solid fa-arrow-right ms-2"></i></span></button> <button data-filter=".cat1"
                            class="tab-btn th-btn style-border3" type="button"><span class="btn-border">UPCOMING MATCH
                                <i class="fa-solid fa-arrow-right ms-2"></i></span></button> <button data-filter=".cat2"
                            class="tab-btn th-btn style-border3" type="button"><span class="btn-border">FINISHED MATCH
                                <i class="fa-solid fa-arrow-right ms-2"></i></span></button></div>
                </div>
            </div>
            <div class="row gy-40 filter-active">
                <div class="col-12 filter-item cat1">
                    <div class="tournament-card style2">
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-1.png')}}"
                                alt="tournament image"></div>
                        <div class="tournament-card-versus"><img src="{{asset('assets/img/tournament/game-vs1.svg')}}"
                                alt="tournament image"></div>
                        <div class="tournament-card-content">
                            <div class="tournament-card-details" data-mask-src="{{asset('assets/img/bg/tournament-card2-bg.png')}}">
                                <div class="card-title-wrap text-md-end">
                                    <h6 class="tournament-card-subtitle">Pubg Mobile</h6>
                                    <h3 class="tournament-card-title"><a href="tournament-details.html.htm">Pro
                                            Player</a></h3>
                                </div>
                                <div class="tournament-card-date-wrap">
                                    <h2 class="tournament-card-time">07:30</h2>
                                    <p class="tournament-card-date">23 Dec, 2024</p>
                                </div>
                                <div class="card-title-wrap">
                                    <h6 class="tournament-card-subtitle">Pubg Mobile</h6>
                                    <h3 class="tournament-card-title"><a href="tournament-details.html.htm">Lion
                                            King</a></h3>
                                </div>
                            </div>
                            <div class="tournament-card-meta"><span
                                    class="tournament-card-tag gradient-border">Upcoming</span> <span
                                    class="tournament-card-score gradient-border">0 / 0</span></div>
                        </div>
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-2.png')}}"
                                alt="tournament image"></div>
                    </div>
                </div>
                <div class="col-12 filter-item cat2">
                    <div class="tournament-card style2">
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-3.png')}}"
                                alt="tournament image"></div>
                        <div class="tournament-card-versus"><img src="{{asset('assets/img/tournament/game-vs1.svg')}}"
                                alt="tournament image"></div>
                        <div class="tournament-card-content">
                            <div class="tournament-card-details" data-mask-src="{{asset('assets/img/bg/tournament-card2-bg.png')}}">
                                <div class="card-title-wrap text-md-end">
                                    <h6 class="tournament-card-subtitle">Pubg Mobile</h6>
                                    <h3 class="tournament-card-title"><a href="tournament-details.html.htm">Assassin</a>
                                    </h3>
                                </div>
                                <div class="tournament-card-date-wrap">
                                    <h2 class="tournament-card-time">09:00</h2>
                                    <p class="tournament-card-date">23 Dec, 2024</p>
                                </div>
                                <div class="card-title-wrap">
                                    <h6 class="tournament-card-subtitle">Pubg Mobile</h6>
                                    <h3 class="tournament-card-title"><a
                                            href="tournament-details.html.htm">Cyberpunk</a></h3>
                                </div>
                            </div>
                            <div class="tournament-card-meta"><span
                                    class="tournament-card-tag gradient-border">Finished</span> <span
                                    class="tournament-card-score gradient-border">20 / 22</span></div>
                        </div>
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-4.png')}}"
                                alt="tournament image"></div>
                    </div>
                </div>
                <div class="col-12 filter-item cat1">
                    <div class="tournament-card style2">
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-5.png')}}"
                                alt="tournament image"></div>
                        <div class="tournament-card-versus"><img src="{{asset('assets/img/tournament/game-vs1.svg')}}"
                                alt="tournament image"></div>
                        <div class="tournament-card-content">
                            <div class="tournament-card-details" data-mask-src="{{asset('assets/img/bg/tournament-card2-bg.png')}}">
                                <div class="card-title-wrap text-md-end">
                                    <h6 class="tournament-card-subtitle">Pubg Mobile</h6>
                                    <h3 class="tournament-card-title"><a href="tournament-details.html.htm">Team
                                            Gorilla</a></h3>
                                </div>
                                <div class="tournament-card-date-wrap">
                                    <h2 class="tournament-card-time">06:30</h2>
                                    <p class="tournament-card-date">23 Dec, 2024</p>
                                </div>
                                <div class="card-title-wrap">
                                    <h6 class="tournament-card-subtitle">Pubg Mobile</h6>
                                    <h3 class="tournament-card-title"><a href="tournament-details.html.htm">Badgamer</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="tournament-card-meta"><span
                                    class="tournament-card-tag gradient-border">Upcoming</span> <span
                                    class="tournament-card-score gradient-border">0 / 0</span></div>
                        </div>
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-6.png')}}"
                                alt="tournament image"></div>
                    </div>
                </div>
                <div class="col-12 filter-item cat1">
                    <div class="tournament-card style2">
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-7.png')}}"
                                alt="tournament image"></div>
                        <div class="tournament-card-versus"><img src="{{asset('assets/img/tournament/game-vs1.svg')}}"
                                alt="tournament image"></div>
                        <div class="tournament-card-content">
                            <div class="tournament-card-details" data-mask-src="{{asset('assets/img/bg/tournament-card2-bg.png')}}">
                                <div class="card-title-wrap text-md-end">
                                    <h6 class="tournament-card-subtitle">Pubg Mobile</h6>
                                    <h3 class="tournament-card-title"><a href="tournament-details.html.htm">Ninja
                                            Rok</a></h3>
                                </div>
                                <div class="tournament-card-date-wrap">
                                    <h2 class="tournament-card-time">07:30</h2>
                                    <p class="tournament-card-date">23 Dec, 2024</p>
                                </div>
                                <div class="card-title-wrap">
                                    <h6 class="tournament-card-subtitle">Pubg Mobile</h6>
                                    <h3 class="tournament-card-title"><a href="tournament-details.html.htm">Hacker
                                            King</a></h3>
                                </div>
                            </div>
                            <div class="tournament-card-meta"><span
                                    class="tournament-card-tag gradient-border">Upcoming</span> <span
                                    class="tournament-card-score gradient-border">0 / 0</span></div>
                        </div>
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-9.png')}}"
                                alt="tournament image"></div>
                    </div>
                </div>
                <div class="col-12 filter-item cat1">
                    <div class="tournament-card style2">
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-10.png')}}"
                                alt="tournament image"></div>
                        <div class="tournament-card-versus"><img src="{{asset('assets/img/tournament/game-vs1.svg')}}"
                                alt="tournament image"></div>
                        <div class="tournament-card-content">
                            <div class="tournament-card-details" data-mask-src="{{asset('assets/img/bg/tournament-card2-bg.png')}}">
                                <div class="card-title-wrap text-md-end">
                                    <h6 class="tournament-card-subtitle">Pubg Mobile</h6>
                                    <h3 class="tournament-card-title"><a
                                            href="tournament-details.html.htm">Hooligans</a></h3>
                                </div>
                                <div class="tournament-card-date-wrap">
                                    <h2 class="tournament-card-time">05:30</h2>
                                    <p class="tournament-card-date">25 Dec, 2024</p>
                                </div>
                                <div class="card-title-wrap">
                                    <h6 class="tournament-card-subtitle">Pubg Mobile</h6>
                                    <h3 class="tournament-card-title"><a href="tournament-details.html.htm">Casino
                                            Star</a></h3>
                                </div>
                            </div>
                            <div class="tournament-card-meta"><span
                                    class="tournament-card-tag gradient-border">Upcoming</span> <span
                                    class="tournament-card-score gradient-border">0 / 0</span></div>
                        </div>
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-11.png')}}"
                                alt="tournament image"></div>
                    </div>
                </div>
                <div class="col-12 filter-item cat1">
                    <div class="tournament-card style2">
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-12.png')}}"
                                alt="tournament image"></div>
                        <div class="tournament-card-versus"><img src="{{asset('assets/img/tournament/game-vs1.svg')}}"
                                alt="tournament image"></div>
                        <div class="tournament-card-content">
                            <div class="tournament-card-details" data-mask-src="{{asset('assets/img/bg/tournament-card2-bg.png')}}">
                                <div class="card-title-wrap text-md-end">
                                    <h6 class="tournament-card-subtitle">Pubg Mobile</h6>
                                    <h3 class="tournament-card-title"><a href="tournament-details.html.htm">Cools
                                            Gaming</a></h3>
                                </div>
                                <div class="tournament-card-date-wrap">
                                    <h2 class="tournament-card-time">06:30</h2>
                                    <p class="tournament-card-date">26 Dec, 2024</p>
                                </div>
                                <div class="card-title-wrap">
                                    <h6 class="tournament-card-subtitle">Pubg Mobile</h6>
                                    <h3 class="tournament-card-title"><a href="tournament-details.html.htm">Fire
                                            Dragon</a></h3>
                                </div>
                            </div>
                            <div class="tournament-card-meta"><span
                                    class="tournament-card-tag gradient-border">Upcoming</span> <span
                                    class="tournament-card-score gradient-border">0 / 0</span></div>
                        </div>
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-13.png')}}"
                                alt="tournament image"></div>
                    </div>
                </div>
                <div class="col-12 filter-item cat2">
                    <div class="tournament-card style2">
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-14.png')}}"
                                alt="tournament image"></div>
                        <div class="tournament-card-versus"><img src="{{asset('assets/img/tournament/game-vs1.svg')}}"
                                alt="tournament image"></div>
                        <div class="tournament-card-content">
                            <div class="tournament-card-details" data-mask-src="{{asset('assets/img/bg/tournament-card2-bg.png')}}">
                                <div class="card-title-wrap text-md-end">
                                    <h6 class="tournament-card-subtitle">Pubg Mobile</h6>
                                    <h3 class="tournament-card-title"><a href="tournament-details.html.htm">Master
                                            Panda</a></h3>
                                </div>
                                <div class="tournament-card-date-wrap">
                                    <h2 class="tournament-card-time">08:30</h2>
                                    <p class="tournament-card-date">27 Dec, 2024</p>
                                </div>
                                <div class="card-title-wrap">
                                    <h6 class="tournament-card-subtitle">Pubg Mobile</h6>
                                    <h3 class="tournament-card-title"><a href="tournament-details.html.htm">Esports
                                            King</a></h3>
                                </div>
                            </div>
                            <div class="tournament-card-meta"><span
                                    class="tournament-card-tag gradient-border">Finished</span> <span
                                    class="tournament-card-score gradient-border">0 / 0</span></div>
                        </div>
                        <div class="tournament-card-img"><img src="{{asset('assets/img/tournament/1-8.png')}}"
                                alt="tournament image"></div>
                    </div>
                </div>
            </div>
            <div class="pt-60 text-center">
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
        </div>
    </section>

    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>

@endsection
