@extends('layouts.scaffold')
@push('title')
    {{ $title ?? '' }}
@endpush
@section('content')


    <div style="margin-top: 150px;" class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/bg/gallery.avif')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">GALLERY</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>GALLERY</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="row gy-4 masonary-active">
                <div class="col-xl-8 col-md-6 filter-item">
                    <div class="gallery-card">
                        <div class="box-img"><img src="{{asset('assets/img/gallery/gallery_1_1.jpg')}}" alt="gallery image"> <a
                                href="{{asset('assets/img/gallery/gallery_1_1.jpg')}}" class="play-btn popup-image style3"><i
                                    class="fa-solid fa-arrow-up-right"></i></a></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 filter-item">
                    <div class="gallery-card">
                        <div class="box-img"><img src="{{asset('assets/img/gallery/gallery_1_2.jpg')}}" alt="gallery image"> <a
                                href="{{asset('assets/img/gallery/gallery_1_2.jpg')}}" class="play-btn popup-image style3"><i
                                    class="fa-solid fa-arrow-up-right"></i></a></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 filter-item">
                    <div class="gallery-card">
                        <div class="box-img"><img src="{{asset('assets/img/gallery/gallery_1_3.jpg')}}" alt="gallery image"> <a
                                href="{{asset('assets/img/gallery/gallery_1_3.jpg')}}" class="play-btn popup-image style3"><i
                                    class="fa-solid fa-arrow-up-right"></i></a></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 filter-item">
                    <div class="gallery-card">
                        <div class="box-img"><img src="{{asset('assets/img/gallery/gallery_1_4.jpg')}}" alt="gallery image"> <a
                                href="{{asset('assets/img/gallery/gallery_1_4.jpg')}}" class="play-btn popup-image style3"><i
                                    class="fa-solid fa-arrow-up-right"></i></a></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 filter-item">
                    <div class="gallery-card">
                        <div class="box-img"><img src="{{asset('assets/img/gallery/gallery_1_5.jpg')}}" alt="gallery image"> <a
                                href="{{asset('assets/img/gallery/gallery_1_5.jpg')}}" class="play-btn popup-image style3"><i
                                    class="fa-solid fa-arrow-up-right"></i></a></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 filter-item">
                    <div class="gallery-card">
                        <div class="box-img"><img src="{{asset('assets/img/gallery/gallery_1_6.jpg')}}" alt="gallery image"> <a
                                href="{{asset('assets/img/gallery/gallery_1_6.jpg')}}" class="play-btn popup-image style3"><i
                                    class="fa-solid fa-arrow-up-right"></i></a></div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-6 filter-item">
                    <div class="gallery-card">
                        <div class="box-img"><img src="{{asset('assets/img/gallery/gallery_1_7.jpg')}}" alt="gallery image"> <a
                                href="{{asset('assets/img/gallery/gallery_1_7.jpg')}}" class="play-btn popup-image style3"><i
                                    class="fa-solid fa-arrow-up-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>

@endsection
