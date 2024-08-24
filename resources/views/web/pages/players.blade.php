@extends('layouts.scaffold')
@push('title')
    {{ $title ?? '' }}
@endpush
@section('content')


    <div style="margin-top: 150px" class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/bg/spider2.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">PLAYERS</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>PLAYERS</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="title-area text-center"><span class="sub-title style2"># OUR TOP STREAMERS</span>
                        <h2 class="sec-title">Let’s See Our Top Rated Streamers <span class="text-theme">!</span></h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-3 col-sm-6">
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
                <div class="col-lg-3 col-sm-6">
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
                <div class="col-lg-3 col-sm-6">
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
                <div class="col-lg-3 col-sm-6">
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
                <div class="col-lg-3 col-sm-6">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="th-team team-card">
                        <div class="team-card-corner team-card-corner1"></div>
                        <div class="team-card-corner team-card-corner2"></div>
                        <div class="team-card-corner team-card-corner3"></div>
                        <div class="team-card-corner team-card-corner4"></div>
                        <div class="img-wrap">
                            <div class="team-img"><img src="{{asset('assets/img/team/1-6.png')}}" alt="Team"></div><img
                                class="game-logo" src="{{asset('assets/img/team/game-logo1-6.png')}}" alt="Team">
                        </div>
                        <div class="team-card-content">
                            <h3 class="box-title"><a href="team-details.html.htm">Eliyas Bel</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="th-team team-card">
                        <div class="team-card-corner team-card-corner1"></div>
                        <div class="team-card-corner team-card-corner2"></div>
                        <div class="team-card-corner team-card-corner3"></div>
                        <div class="team-card-corner team-card-corner4"></div>
                        <div class="img-wrap">
                            <div class="team-img"><img src="{{asset('assets/img/team/1-7.png')}}" alt="Team"></div><img
                                class="game-logo" src="{{asset('assets/img/team/game-logo1-1.png')}}" alt="Team">
                        </div>
                        <div class="team-card-content">
                            <h3 class="box-title"><a href="team-details.html.htm">Eshika Laz</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="th-team team-card">
                        <div class="team-card-corner team-card-corner1"></div>
                        <div class="team-card-corner team-card-corner2"></div>
                        <div class="team-card-corner team-card-corner3"></div>
                        <div class="team-card-corner team-card-corner4"></div>
                        <div class="img-wrap">
                            <div class="team-img"><img src="{{asset('assets/img/team/1-8.png')}}" alt="Team"></div><img
                                class="game-logo" src="{{asset('assets/img/team/game-logo1-2.png')}}" alt="Team">
                        </div>
                        <div class="team-card-content">
                            <h3 class="box-title"><a href="team-details.html.htm">Henry Josep</a></h3>
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
