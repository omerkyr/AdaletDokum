@extends('layouts.master-without-nav')
@section('title')
Giriş Yap
@endsection
@section('content')

<div class="auth-page">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xxl-3 col-lg-4 col-md-5">
                <div class="auth-full-page-content d-flex p-sm-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5 text-center">
                                <a href="{{ url('www.qryazilim.com') }}" class="d-block auth-logo">
                                    <img src="{{ URL::asset('images/qryazilim.png') }}" alt="qryazilim" height="32">
                                </a>
                            </div>
                            <div class="auth-content my-auto">
                                <div class="text-center">
                                    <h5 class="mb-0">Giriş Yap !</h5>
                                    <p class="text-muted mt-2">QR Yazılım Yönetim Paneline Giriş Yapıyorsunuz.</p>
                                </div>
                                <form class="mt-4 pt-2" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-floating form-floating-custom mb-4">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" value="" id="input-username" placeholder="Enter User Name" name="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="input-username">Kullanıcı Adı / E-Posta Adresi</label>
                                        <div class="form-floating-icon">
                                        <i data-feather="users"></i>
                                        </div>
                                    </div>

                                    <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                        <input type="password" class="form-control pe-5 @error('password') is-invalid @enderror" name="password" id="password-input" placeholder="Şifreyi Griniz">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                            <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                        </button>
                                        <label for="input-password">Şifre</label>
                                        <div class="form-floating-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>

{{--                                    <div class="row mb-4">--}}
{{--                                        <div class="col">--}}
{{--                                            <div class="form-check font-size-15">--}}
{{--                                                <input class="form-check-input " type="checkbox" id="remember-check">--}}
{{--                                                <label class="form-check-label font-size-13" for="remember-check">--}}
{{--                                                    Remember me--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}

                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Giriş Yap</button>
                                    </div>
                                </form>

{{--                                <div class="mt-4 pt-2 text-center">--}}
{{--                                    <div class="signin-other-title">--}}
{{--                                        <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign in with -</h5>--}}
{{--                                    </div>--}}

{{--                                    <ul class="list-inline mb-0">--}}
{{--                                        <li class="list-inline-item">--}}
{{--                                            <a href="javascript:void()"--}}
{{--                                                class="social-list-item bg-primary text-white border-primary">--}}
{{--                                                <i class="mdi mdi-facebook"></i>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li class="list-inline-item">--}}
{{--                                            <a href="javascript:void()"--}}
{{--                                                class="social-list-item bg-info text-white border-info">--}}
{{--                                                <i class="mdi mdi-twitter"></i>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li class="list-inline-item">--}}
{{--                                            <a href="javascript:void()"--}}
{{--                                                class="social-list-item bg-danger text-white border-danger">--}}
{{--                                                <i class="mdi mdi-google"></i>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}

{{--                                <div class="mt-5 text-center">--}}
{{--                                    <p class="text-muted mb-0">Don't have an account ? <a href="{{ url('register') }}"--}}
{{--                                            class="text-primary fw-semibold"> Signup now </a> </p>--}}
{{--                                </div>--}}

                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> QR Yazılım</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>
            <!-- end col -->
            <div class="col-xxl-9 col-lg-8 col-md-7">
                <div class="auth-bg pt-md-5 p-4 d-flex">
                    <div class="bg-overlay"></div>
                    <ul class="bg-bubbles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <!-- end bubble effect -->
                    <div class="row justify-content-center align-items-end">
                        <div class="col-xl-7">
                            <div class="p-0 p-sm-4 px-xl-0">
                                <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
{{--                                    <!-- end carouselIndicators -->--}}
{{--                                    <div class="carousel-inner">--}}
{{--                                        <div class="carousel-item active">--}}
{{--                                            <div class="testi-contain text-center text-white">--}}
{{--                                                <i class="bx bxs-quote-alt-left text-success display-6"></i>--}}
{{--                                                <h4 class="mt-4 fw-medium lh-base text-white">--}}
{{--                                                    “I feel confident--}}
{{--                                                    imposing change--}}
{{--                                                    on myself. It's a lot more progressing fun than looking back.--}}
{{--                                                    That's why--}}
{{--                                                    I ultricies enim--}}
{{--                                                    at malesuada nibh diam on tortor neaded to throw curve balls.”--}}
{{--                                                </h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
                                    <!-- end carousel-inner -->
                                </div>
                                <!-- end review carousel -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container fluid -->
</div>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/pages/pass-addon.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/feather-icon.init.js') }}"></script>
@endsection

