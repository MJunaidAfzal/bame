@extends('layouts.auth-scaffold')
@push('title')
    Login
@endpush

@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/bg/bg21.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">SIGN IN HERE</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>LOGIN</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact-page-1 space">
        <div class="contact-sec-1 space bg-repeat overflow-hidden" data-bg-src="{{asset('assets/img/bg/jiji-bg2.png')}}">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6 ">
                        <div class="title-area"><span class="sub-title style2 text-center"># SIGN IN HERE</span>
                            <h2 class="sec-title text-white text-center">LOGIN<span class="text-theme">!</span></h2>
                        </div>
                        <form method="POST" action="{{ route('login') }}" class="contact-form pb-xl-0 space-bottom">
                            @csrf
                            <div class="row">

                                <div class="form-group style-border2 col-md-12"><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address"> <i
                                        class="fal fa-envelope"></i>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group style-border2 col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">
                                    <i class="fal fa-eye" id="togglePassword"></i>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>

                            <a style="float: right;" href="{{ route('password.request') }}">Forget Password</a>
                            <a href="{{ route('register') }}">Create new Account</a>
                            <div class="form-btn col-12">

                                <button type="submit" style="float: right;" class="th-btn mt-3">Login<i
                                        class="fa-solid fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-6">
                        <div class="img-box3">
                            <div class="img1"><img src="{{asset('assets/img/normal/about3-2.png')}}" alt="About"></div>
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
    </script>
@endpush
