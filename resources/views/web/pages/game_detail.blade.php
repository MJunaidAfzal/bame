@extends('layouts.scaffold')
@push('title')
    {{ $title ?? '' }}
@endpush
@section('content')


    <div style="margin-top: 150px;" class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/bg/bg16.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">GAME DETAILS</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>GAME DETAILS</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="overflow-hidden space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xxl-8 col-lg-7">
                    <div class="page-single game-details-wrap">
                        <div class="page-img mb-50"><img class="w-100" src="{{asset('assets/img/game/game-s-1-1.png')}}" alt="img">
                        </div>
                        <div class="page-content">
                            <div class="game-title-wrap">
                                <h2 class="page-title text-white mb-0">The Hunter Killer</h2>
                                <div class="game-meta">Entry Fee: <span class="text-theme">$10.00</span></div>
                            </div>
                            <p class="mb-30">Emerging trends in the esports industry include the growth of mobile
                                esports, the integration of virtual reality in gaming experiences, and the increasing
                                involvement of traditional sports organizations in esports partnerships and investments.
                                Balancing screen time involves taking regular breaks, practicing the 20-20-20 rule
                                (looking at something 20 feet away for 20 seconds every 20 minutes), and incorporating
                                physical activity into daily routines. Establishing a balance between gaming and other
                                activities is crucial for overall well-being.</p>
                            <p class="mb-30">Successful esports teams exhibit strong communication, strategic
                                coordination, and individual player skills. Team chemistry, effective coaching, and
                                adaptability to changing metas are also crucial factors. The rise of mobile gaming has
                                significantly expanded the gaming audience, reaching a broader demographic.</p>
                            <h3 class="text-white mt-45 mb-20">Top Features:</h3>
                            <p>Professional esports players engage in rigorous training routines, including daily
                                practice sessions, analysis of opponents' gameplay, and participation in scrims
                                (practice matches).</p>
                            <div class="checklist list-two-column">
                                <ul>
                                    <li><i class="far fa-shield-check"></i> Thousands of levels across multiple worlds
                                    </li>
                                    <li><i class="far fa-shield-check"></i> Challenging gameplay to train your brain
                                    </li>
                                    <li><i class="far fa-shield-check"></i> Daily events to help you win more prizes
                                    </li>
                                    <li><i class="far fa-shield-check"></i> Free rewards every day</li>
                                    <li><i class="far fa-shield-check"></i> Club Tournaments and other exciting friends
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget">
                            <div class="widget-game-info">
                                <div class="player-logo"><img src="{{asset('assets/img/tournament/1-1.png')}}" alt="img"></div>
                                <h2 class="game-info-title">Download Now</h2>
                                <div class="game-meta-list"><span>Mobile</span> <span>Action RPG</span> <span>PC</span>
                                </div>
                                <div class="game-rating-info">
                                    <div class="rating-wrap"><span class="game-rating"><i class="fas fa-star"></i>
                                            4.8</span> <span class="review-count">(2.6k Review)</span></div>
                                    <div class="download-wrap">
                                        <h5 class="download-wrap-title">10M+</h5><span
                                            class="download-wrap-text">Downloads</span>
                                    </div>
                                </div>
                                <div class="btn-wrap"><a href="#"><img src="{{asset('assets/img/widget/widget-apple-btn.png')}}"
                                            alt="img"></a><a href="#"><img
                                            src="{{asset('assets/img/widget/widget-playstore-btn.png')}}" alt="img"></a></div>
                            </div>
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
