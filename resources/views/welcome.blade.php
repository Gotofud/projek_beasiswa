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
                    </div>
                </div>
            </div>
        </div>

    </section> <!--hero section end-->

    <!--service section start-->
    <section class="ins-service-section pb-120">
        <div class="container" >
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
                                    <h1 class="ins-heading mt-1">5000+</h1>
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
    <section class="counter-with-video" id="tentang">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="cyber-about-img text-center mb-30 mb-lg-0">
                        <img src="{{ asset('user/img/bg.png') }}" alt="VR" class="img-fluid" />
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <div class="sheild-img">
                                    <img src="{{ asset('user/img/blog-img-1.png') }}" alt="Sheild"
                                        class="img-fluid d-none d-lg-block" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="pe-2">
                                    <div class="cyber-about-count-box d-md-flex bg-white p-4 mt-3">
                                        <div class="pe-3">
                                            <h2>5+</h2>
                                        </div>
                                        <div>
                                            <h5 class="h6">Tahun Pengalaman </h5>
                                            <p class="mb-0">Bersama Lebih dari 40 PTN</p>
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
                            <h5 class="h6 text-primary">Inilah Kami</h5>
                            <h2>Tentang Laskar #Beasiswa</h2>
                            <p>
                                Laskar Beasiswa adalah gerakan yang membuka akses bagi pelajar berprestasi untuk kuliah di
                                40+ PTN mitra, dengan dukungan beasiswa, pembinaan, dan pendampingan agar siap bersaing dan
                                berkontribusi.
                            </p>
                            <p>
                                Kolaborasi ini bertujuan mewujudkan pemerataan pendidikan dan mencetak generasi muda unggul
                                dari berbagai penjuru Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!--achievement section start-->
    <section class="ins-achievement-section ptb-120 overflow-hidden" id="benefit">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6">
                    <div class="ins-achivements-box bg-white rounded position-relative overflow-hidden">
                        <span class="border-hr position-absolute"></span>
                        <span class="border-vr position-absolute"></span>
                        <div class="row g-0">
                            <div class="col-6">
                                <div class="ins-achievement-box-item text-end">

                                    <img src="user/img/icons/ins-7.svg" alt="icon" class="img-fluid">
                                    <h3 class="ins-heading mb-0 mt-2"><span class="counter">40+ </span>PTN Ternama</h3>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ins-achievement-box-item text-start">
                                    <img src="user/img/icons/ins-5.svg" alt="icon" class="img-fluid">
                                    <h3 class="ins-heading mb-0 mt-2"><span class="counter">5.000 + </span> Peserta Lolos
                                    </h3>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ins-achievement-box-item text-end">
                                    <img src="user/img/icons/ins-6.svg" alt="icon" class="img-fluid">
                                    <h3 class="ins-heading mb-0 mt-2"><span class="counter">90</span>% Kepuasan Peserta</h3>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ins-achievement-box-item text-start">
                                    <img src="user/img/icons/ins-4.svg" alt="icon" class="img-fluid">
                                    <h3 class="ins-heading mb-0 mt-2"><span class="counter">Beasiswa Full </span>100%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ins-achievement-info">
                        <div class="ins-title mb-30">
                            <div class="d-flex align-items-center mb-3">
                                <span class="subtitle fw-bold text-primary">Benefit</span>
                            </div>
                            <h2 class="ins-heading mb-3">Kenapa Bergabung dengan <mark class="text-primary">Laskar
                                    Beasiswa?.</mark></h2>
                        </div>
                        <ul class="ins-info-list mb-0 list-unstyled">
                            <li class="d-flex align-items-start">
                                <div class="ins-info-content ms-3">
                                    <h6 class="mb-1 ins-heading"><i class="fas fa-check-circle me-2 text-primary"></i>Akses
                                        ke 40+ PTN Ternama</h6>
                                    <p class="mb-0 fs-md">Bekerja sama langsung dengan perguruan tinggi negeri terbaik.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <div class="ins-info-content ms-3">
                                    <h6 class="mb-1 ins-heading"><i
                                            class="fas fa-check-circle me-2 text-primary"></i>Beasiswa & Pendampingan
                                        Lengkap</h6>
                                    <p class="mb-0 fs-md">Termasuk biaya, pembinaan, dan komunitas supportif.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <div class="ins-info-content ms-3">
                                    <h6 class="mb-1 ins-heading"><i
                                            class="fas fa-check-circle me-2 text-primary"></i>Pembinaan Karakter & Soft
                                        Skill</h6>
                                    <p class="mb-0 fs-md">Lebih dari sekadar bantuan dana — kami siapkan pemimpin masa
                                        depan..</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <div class="ins-info-content ms-3">
                                    <h6 class="mb-1 ins-heading"><i
                                            class="fas fa-check-circle me-2 text-primary"></i>Komunitas Alumni Kuat</h6>
                                    <p class="mb-0 fs-md">Terhubung dengan ratusan alumni di berbagai bidang.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--achievement section end-->

    <!--subscription area start-->
    <section class="ins-subscription-area" id="daftar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="ins-subscription text-center rounded position-relative overflow-hidden">
                        <span class="circle-shape-right"></span>
                        <span class="circle-shape-left"></span>
                        <span class="circle-shape-top"></span>
                        @guest
                            <h2 class="ins-heading mb-3">Mari Bergabung Bersama <br> Laskar Beasiswa!</h2>
                            <a href="{{ route('register') }}" class="ins-btn ins-primary-btn ">Let's get started</a>
                        @else
                            <h2 class="ins-heading mb-3">Cek Status Mu disini!</h2>
                            <a href="{{ route('user.status') }}" class="ins-btn ins-primary-btn">
                                Cek Status
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section> <!--subscription area end-->

    <!-- Faq Start -->
    <section class="cyber-faq pt-120 pb-60"  id="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-6">
                    <div class="section-heading text-center mb-5">
                        <h5 class="h6 text-primary">Faq</h5>
                        <h2>Frequently Asked Questions</h2>
                        <p>
                            Beberapa Pertanyaan yang sering ditanyakan
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="cyber-faq-wrapper">
                        <div class="accordion faq-accordion" id="accordionExample">
                            <div class="accordion-item border rounded active">
                                <h5 class="accordion-header" id="faq-1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="true">
                                        Apa itu Laskar Beasiswa?
                                    </button>
                                </h5>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-1"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Laskar Beasiswa adalah program beasiswa pendidikan yang bekerja sama dengan lebih
                                        dari 40 Perguruan Tinggi Negeri (PTN) ternama di Indonesia. Program ini tidak hanya
                                        memberikan bantuan biaya kuliah, tetapi juga pendampingan, pelatihan soft skill,
                                        serta akses ke komunitas alumni yang kuat.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border rounded">
                                <h5 class="accordion-header" id="faq-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="false">
                                        Siapa saja yang bisa mendaftar Laskar Beasiswa?
                                    </button>
                                </h5>
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Laskar Beasiswa terbuka untuk pelajar SMA/SMK sederajat kelas 12 dan lulusan tahun
                                        ini yang memiliki semangat tinggi untuk melanjutkan pendidikan ke jenjang perguruan
                                        tinggi, terutama mereka yang memiliki keterbatasan ekonomi namun berprestasi.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border rounded">
                                <h5 class="accordion-header" id="faq-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3" aria-expanded="false">
                                        Apa saja yang didapatkan jika lolos beasiswa ini?
                                    </button>
                                </h5>
                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Penerima beasiswa akan mendapatkan bantuan biaya kuliah secara penuh (100%),
                                        pendampingan akademik dan non-akademik, pelatihan pengembangan diri, serta akses ke
                                        jaringan alumni dan komunitas yang suportif.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border rounded">
                                <h5 class="accordion-header" id="faq-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-4" aria-expanded="false">
                                        Bagaimana cara mendaftar Laskar Beasiswa?
                                    </button>
                                </h5>
                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Pendaftaran dilakukan secara online melalui website resmi Laskar Beasiswa. Peserta
                                        harus mengisi formulir, melampirkan dokumen yang diperlukan, dan mengikuti proses
                                        seleksi seperti tes snbt
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cyber-faq-img text-lg-center mt-5 mt-lg-0 0">
                        <img src="{{ asset('user/img/kuliah.png') }}" alt="cyber security" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->
@endsection