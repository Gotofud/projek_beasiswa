<header class="ins-header main-header w-100 z-10">
    <nav class="navbar navbar-expand-xl navbar-light sticky-header">
        <div class="container d-flex align-items-center justify-content-lg-between position-relative">
            <a href="index.html" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                <img src="user/img/logo-color.png" alt="logo" class="img-fluid logo-color" />
            </a>

            <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                <i class="flaticon-menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop"
                    aria-controls="offcanvasWithBackdrop"></i>
            </a>
            <div class="clearfix"></div>
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                    <li><a href="services.html" class="nav-link">Beranda</a></li>
                    <li><a href="services.html" class="nav-link">Tentang Laskar</a></li>
                    <li><a href="services.html" class="nav-link">Benefit</a></li>
                    <li><a href="services.html" class="nav-link">Daftar Beasiswa</a></li>
                    <li><a href="services.html" class="nav-link">Faq</a></li>
                </ul>
            </div>

            <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                @guest
                    <a href="{{route('login')}}" class="btn btn-link text-decoration-none me-2">Sign In</a>
                    <a href="{{ route('register') }}" class="ins-btn ins-primary-btn">Get Started</a>
                @else
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><img src="{{ asset('admin-asset/images/profile/user-1.jpg') }}"
                                class="rounded-circle" width="35" height="35" alt="modernize-img" /></a>
                        <div class="d-flex align-items-center">
                        </div>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                            aria-labelledby="drop1">
                            <div class="profile-dropdown position-relative" data-simplebar>
                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                    <div class="ms-3 text-center">
                                        <img src="{{ asset('admin/images/profile/user-1.jpg') }}" class="rounded-circle"
                                            width="80" height="80" alt="modernize-img" />
                                        <p class="mb-1 fs-3">{{ Auth::user()->name }}</p>
                                        <p class="mb-0 d-flex align-items-center gap-2">
                                            <i class="ti ti-mail fs-4"></i> {{ Auth::user()->email }}
                                        </p>
                                    </div>
                                </div>
                                <div class="d-grid py-4 px-7 pt-8">
                                    <a class="btn btn-outline-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </nav>
    <!--offcanvas menu end-->
</header>