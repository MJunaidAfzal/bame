@extends('layouts.scaffold')
@push('title')
    {{ $title ?? '' }}
@endpush
@section('content')


    <div style="margin-top: 150px;" class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/bg/bg15.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">GAME PAGE</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>GAME</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="overflow-hidden space-top space-extra2-bottom">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="game-card style2">
                        <div class="game-card-img"><a href="game-details.html.htm"><img src="{{asset('assets/img/game/2-1.png')}}"
                                    alt="game image"></a>
                            <div class="game-logo"><img src="{{asset('assets/img/game/logo2-1.png')}}" alt="game logo"></div>
                        </div>
                        <div class="game-card-details">
                            <div class="media-left">
                                <h3 class="box-title"><a href="game-details.html.htm">The Hunter Killer</a></h3>
                                <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                            </div>
                            <div class="media-body"><span class="game-rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="review-count">(2.6k Review)</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="game-card style2">
                        <div class="game-card-img"><a href="game-details.html.htm"><img src="{{asset('assets/img/game/2-2.png')}}"
                                    alt="game image"></a>
                            <div class="game-logo"><img src="{{asset('assets/img/game/logo2-2.png')}}" alt="game logo"></div>
                        </div>
                        <div class="game-card-details">
                            <div class="media-left">
                                <h3 class="box-title"><a href="game-details.html.htm">Lion The King</a></h3>
                                <p class="game-content">Entry Fee:<span class="text-theme">Free</span></p>
                            </div>
                            <div class="media-body"><span class="game-rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="review-count">(2.6k Review)</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="game-card style2">
                        <div class="game-card-img"><a href="game-details.html.htm"><img src="{{asset('assets/img/game/2-3.png')}}"
                                    alt="game image"></a>
                            <div class="game-logo"><img src="{{asset('assets/img/game/logo2-3.png')}}" alt="game logo"></div>
                        </div>
                        <div class="game-card-details">
                            <div class="media-left">
                                <h3 class="box-title"><a href="game-details.html.htm">Duty Balck Ops</a></h3>
                                <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                            </div>
                            <div class="media-body"><span class="game-rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="review-count">(2.6k Review)</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="game-card style2">
                        <div class="game-card-img"><a href="game-details.html.htm"><img src="{{asset('assets/img/game/2-4.png')}}"
                                    alt="game image"></a>
                            <div class="game-logo"><img src="{{asset('assets/img/game/logo2-4.png')}}" alt="game logo"></div>
                        </div>
                        <div class="game-card-details">
                            <div class="media-left">
                                <h3 class="box-title"><a href="game-details.html.htm">Crazy Wild</a></h3>
                                <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                            </div>
                            <div class="media-body"><span class="game-rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="review-count">(2.6k Review)</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="game-card style2">
                        <div class="game-card-img"><a href="game-details.html.htm"><img src="{{asset('assets/img/game/2-5.png')}}"
                                    alt="game image"></a>
                            <div class="game-logo"><img src="{{asset('assets/img/game/logo2-5.png')}}" alt="game logo"></div>
                        </div>
                        <div class="game-card-details">
                            <div class="media-left">
                                <h3 class="box-title"><a href="game-details.html.htm">Plants War</a></h3>
                                <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                            </div>
                            <div class="media-body"><span class="game-rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="review-count">(2.6k Review)</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="game-card style2">
                        <div class="game-card-img"><a href="game-details.html.htm"><img src="{{asset('assets/img/game/2-6.png')}}"
                                    alt="game image"></a>
                            <div class="game-logo"><img src="{{asset('assets/img/game/logo2-6.png')}}" alt="game logo"></div>
                        </div>
                        <div class="game-card-details">
                            <div class="media-left">
                                <h3 class="box-title"><a href="game-details.html.htm">Royal Treasures</a></h3>
                                <p class="game-content">Entry Fee:<span class="text-theme">Free</span></p>
                            </div>
                            <div class="media-body"><span class="game-rating"><i class="fas fa-star"></i> 4.8</span>
                                <span class="review-count">(2.6k Review)</span></div>
                        </div>
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
