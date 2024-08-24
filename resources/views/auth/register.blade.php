@extends('layouts.auth-scaffold')
@push('title')
    Register
@endpush

@section('content')


    <div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/bg/bg17.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">CREATE NEW ACCOUNT</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">HOME</a></li>
                    <li>REGISTER</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact-page-1 space">
        <div class="contact-sec-1 space bg-repeat overflow-hidden" data-bg-src="{{asset('assets/img/bg/jiji-bg2.png')}}">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6 ">
                        <div class="title-area"><span class="sub-title style2 text-center"># SIGN UP HERE</span>
                            <h2 class="sec-title text-white text-center">REGISTER<span class="text-theme">!</span></h2>
                        </div>
                        <form method="POST" action="{{ route('register') }}" class="contact-form pb-xl-0 space-bottom">
                            @csrf
                            <div class="row">
                                <div class="form-group style-border2 col-md-12"><input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name"> <i class="fal fa-user"></i>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group style-border2 col-md-12"><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address"> <i
                                        class="fal fa-envelope"></i>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group style-border2 col-md-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Your Password">
                                        <i class="fal fa-eye" id="togglePassword"></i>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group style-border2 col-md-12">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Your Password">
                                        <i class="fal fa-eye" id="toggleConfirmPassword"></i>
                                    </div>

                            </div>

                            <a href="{{ route('login') }}">I have an Already Account!</a>
                            <div class="form-btn col-12">

                                <button type="submit" style="float: right;" class="th-btn">Register<i
                                        class="fa-solid fa-arrow-right ms-2"></i></button>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="img-box3">
                            <div class="img1"><img width="100%" src="{{asset('assets/img/normal/about1-1.png')}}" alt="About"></div>
                        </div>
                    </div>

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
@push('scripts')
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
    var passwordInput = document.getElementById('password');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        this.classList.remove('fa-eye');
        this.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        this.classList.remove('fa-eye-slash');
        this.classList.add('fa-eye');
    }
});

document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
    var confirmPasswordInput = document.getElementById('password-confirm');
    if (confirmPasswordInput.type === 'password') {
        confirmPasswordInput.type = 'text';
        this.classList.remove('fa-eye');
        this.classList.add('fa-eye-slash');
    } else {
        confirmPasswordInput.type = 'password';
        this.classList.remove('fa-eye-slash');
        this.classList.add('fa-eye');
    }
});

    </script>
@endpush
