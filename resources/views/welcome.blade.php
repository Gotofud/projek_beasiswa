@extends('layouts.user.user')
@section('content')
    <!--hero section start-->
    <section class="ins-hero-section position-relative overflow-hidden">
        <img src="{{ asset('user/img/shape/gradient-rectangle-1.png') }}" alt="shape"
            class="position-absolute rectangle-shape start-0 top-0">
        <img src="{{ asset('user/img/shape/gradient-rectangle-2.png') }}" alt="shape"
            class="position-absolute rectangle-shape end-0 top-0">
        <img src="{{ asset('user/img/shape/ins-primary-circle.png') }}" alt="not found"
            class="position-absolute start-0 bottom-0 translate-middle-x">
        <img src="{{ asset('user/img/shape/hero-curve.png') }}" alt="not found"
            class="position-absolute start-0 bottom-0 ins-hero-curve w-100">
        <img src="{{ asset('user/img/shape/arrow-shape.png') }}" alt="not found"
            class="position-absolute arrow-shape d-none d-sm-block">
        <span
            class="heart-sign bg-white position-absolute d-inline-flex align-items-center justify-content-center text-danger rounded-circle"><i
                class="fa-solid fa-heart"></i></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="ins-hero-content text-center">
                        <div class="ins-title text-center">
                            <p>#Beasiswa no 1 di Indonesia</p>
                            <h1 class="display-2 ins-heading mb-20 fw-semibold">Buat Mimpi mu menjadi <mark>Nyata.</mark>
                            </h1>
                            @guest
                                <a href="{{ route('register') }}" class="ins-btn ins-primary-btn ">Let's get started</a>
                            @else
                                <a href="{{ route('user.status') }}" class="ins-btn ins-primary-btn">
                                    Cek Status
                                </a>
                            @endguest
                        </div>
                        <img src="{{ asset('user/img/people-bg.png') }}" alt="not found"
                            class="img-fluid mt-5 position-relative">
                            
     @include('layouts.user.modal.status')
                    </div>
                </div>
            </div>
        </div>
        
    </section> <!--hero section end-->

    <!--service section start-->
    <section class="ins-service-section pb-120">
        <div class="container">
            <div class="ins-service-top pb-120">
                <div class="row justify-content-between g-4">
                    <div class="col-xxl-4 col-xl-5 col-lg-6">
                        <div class="ins-service-contact bg-white rounded">
                            <div class="d-flex align-items-center">
                                <span class="icon-wrapper d-flex align-items-center justify-content-center rounded">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">

                                    </svg>
                                </span>
                                <div class="ins-srv-right ms-3">
                                    <span class="fw-semibold">Peserta Lolos</span>
                                    <h1 class="ins-heading mt-1">100+</h1>
                                </div>
                                <div class="ins-srv-right ms-5">
                                    <span class="fw-semibold">Kepuasan Peserta</span>
                                    <h1 class="ins-heading mt-1">90%</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 align-self-end">
                        <div class="ins-brands mt-4 mt-lg-0">
                            <div class="d-flex align-items-center justify-content-sm-end justify-content-center">
                                <span class="me-1 d-none d-sm-block">
                                    <svg width="141" height="13" viewBox="0 0 141 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M140.86 6.39014H6.42745" stroke="#0EE7C5" stroke-width="1.49369" />
                                        <path d="M0.451783 6.38949L9.41393 1.2152L9.41393 11.5638L0.451783 6.38949Z"
                                            fill="#0EE7C5" />
                                    </svg>
                                </span>
                                <h5 class="ins-heading">Lebih dari 40 Universitas terkemuka </h5>
                            </div>
                            <div class="ins-brand-slider mt-4 swiper">
                                <div class="swiper-wrapper">
                                    <div class="ins-brand-single swiper-slide">
                                        <img src="user/img/clients/logo-ui.png" alt="brand" class="img-fluid">
                                    </div>
                                    <div class="ins-brand-single swiper-slide">
                                        <img src="user/img/clients/logo-ugm.png" alt="brand" class="img-fluid">
                                    </div>
                                    <div class="ins-brand-single swiper-slide">
                                        <img src="user/img/clients/logo-itb.png" alt="brand" class="img-fluid">
                                    </div>
                                    <div class="ins-brand-single swiper-slide">
                                        <img src="user/img/clients/logo-unair.png" alt="brand" class="img-fluid">
                                    </div>
                                    <div class="ins-brand-single swiper-slide">
                                        <img src="user/img/clients/logo-ipb.png" alt="brand" class="img-fluid">
                                    </div>
                                    <div class="ins-brand-single swiper-slide">
                                        <img src="user/img/clients/logo-its.png" alt="brand" class="img-fluid">
                                    </div>
                                    <div class="ins-brand-single swiper-slide">
                                        <img src="user/img/clients/logo-unpad.png" alt="brand" class="img-fluid">
                                    </div>
                                    <div class="ins-brand-single swiper-slide">
                                        <img src="user/img/clients/logo-undip.png" alt="brand" class="img-fluid">
                                    </div>
                                    <div class="ins-brand-single swiper-slide">
                                        <img src="user/img/clients/logo-ub.png" alt="brand" class="img-fluid">
                                    </div>
                                    <div class="ins-brand-single swiper-slide">
                                        <img src="user/img/clients/logo-binus.png" alt="brand" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--service section end-->

    <!-- About Start -->
    <section class="counter-with-video" id="cyber-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="cyber-about-img text-center mb-30 mb-lg-0">
                        <img src="user/img/about_cyber.jpg" alt="VR" class="img-fluid" />
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <div class="sheild-img">
                                    <img src="user/img/about2.png" alt="Sheild" class="img-fluid d-none d-lg-block" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="pe-2">
                                    <div class="cyber-about-count-box d-md-flex bg-white p-4 mt-3">
                                        <div class="pe-3">
                                            <h2>5+</h2>
                                        </div>
                                        <div>
                                            <h5 class="h6">Years Experience</h5>
                                            <p class="mb-0">We Just Big Achived</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pt-5">
                        <div class="section-heading mb-5">
                            <h5 class="h6 text-primary">Tentang Laskar Beasiswa</h5>
                            <h2>We’re Advanced Cyber Security Provider</h2>
                            <p>
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                amet Velit officia consequat duis enim velit mollit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!--achievement section start-->
    <section class="ins-achievement-section ptb-120 overflow-hidden">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6">
                    <div class="ins-achivements-box bg-white rounded position-relative overflow-hidden">
                        <span class="border-hr position-absolute"></span>
                        <span class="border-vr position-absolute"></span>
                        <div class="row g-0">
                            <div class="col-6">
                                <div class="ins-achievement-box-item text-end">
                                    <img src="user/img/icons/ins-4.svg" alt="icon" class="img-fluid">
                                    <h3 class="ins-heading mb-0 mt-2"><span class="counter">5.6</span>M+</h3>
                                    <p class="mb-0 fw-bold ins-text">Insurance User</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ins-achievement-box-item text-start">
                                    <img src="user/img/icons/ins-5.svg" alt="icon" class="img-fluid">
                                    <h3 class="ins-heading mb-0 mt-2"><span class="counter">85</span>+</h3>
                                    <p class="mb-0 fw-bold ins-text">Insurance User</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ins-achievement-box-item text-end">
                                    <img src="user/img/icons/ins-6.svg" alt="icon" class="img-fluid">
                                    <h3 class="ins-heading mb-0 mt-2"><span class="counter">95</span>%</h3>
                                    <p class="mb-0 fw-bold ins-text">Insurance User</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ins-achievement-box-item text-start">
                                    <img src="user/img/icons/ins-7.svg" alt="icon" class="img-fluid">
                                    <h3 class="ins-heading mb-0 mt-2"><span class="counter">45</span>k+</h3>
                                    <p class="mb-0 fw-bold ins-text">Insurance User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ins-achievement-info">
                        <div class="ins-title mb-30">
                            <div class="d-flex align-items-center mb-3">
                                <span class="subtitle fw-bold">Achievements</span>
                                <span class="ms-1">
                                    <svg width="103" height="13" viewBox="0 0 103 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.696533 6.60583L93.3054 6.60584" stroke="#0EE7C5"
                                            stroke-width="1.49369" />
                                        <path d="M102.266 6.60263L93.3036 11.7769L93.3036 1.42833L102.266 6.60263Z"
                                            fill="#0EE7C5" />
                                    </svg>
                                </span>
                            </div>
                            <h2 class="ins-heading mb-3">Most Interesting Facts And Smart <mark>Communication.</mark></h2>
                            <p class="ins-text mb-0">Denounce with righteous indignation and dislike men who are so beguiled
                                and demoralized by the charms of pleasure and trouble.</p>
                        </div>
                        <ul class="ins-info-list mb-0 list-unstyled">
                            <li class="d-flex align-items-start">
                                <span
                                    class="icon-wrapper d-flex align-items-center justify-content-center rounded text-white bg-telegram flex-shrink-0">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </span>
                                <div class="ins-info-content ms-3">
                                    <h6 class="mb-1 ins-heading">Telegram Chat</h6>
                                    <p class="mb-0 fs-md">Denounce with righteous indignation and dislike the charms of
                                        pleasure and trouble.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <span
                                    class="icon-wrapper d-flex align-items-center justify-content-center rounded text-white bg-discord flex-shrink-0">
                                    <i class="fa-brands fa-discord"></i>
                                </span>
                                <div class="ins-info-content ms-3">
                                    <h6 class="mb-1 ins-heading">Discord Chat Chat</h6>
                                    <p class="mb-0 fs-md">Denounce with righteous indignation and dislike the charms of
                                        pleasure and trouble.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--achievement section end-->

    <!--subscription area start-->
    <section class="ins-subscription-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="ins-subscription text-center rounded position-relative overflow-hidden">
                        <span class="circle-shape-right"></span>
                        <span class="circle-shape-left"></span>
                        <span class="circle-shape-top"></span>
                        <h2 class="ins-heading mb-3">Get your Personalized <br> Insurance Today!</h2>
                        <p class="lead ins-text pb-2 mb-0">Quiety my business conceptualize cutting-edgeultivate strategic
                        </p>
                        <form class="ins-sb-form d-flex align-items-center justify-content-center flex-wrap mt-4">
                            <input type="email" placeholder="Enter your Email" class="bg-white rounded border-0">
                            <button class="ins-btn ins-primary-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--subscription area end-->


@endsection