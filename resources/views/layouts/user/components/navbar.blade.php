<header class="ins-header main-header w-100 z-10">
    <nav class="navbar navbar-expand-xl navbar-light sticky-header">
        <div class="container d-flex align-items-center justify-content-lg-between position-relative">
            <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                <img src="{{ asset('user/img/logo-color.png') }}" alt="logo" class="img-fluid logo-color" />
            </a>

            <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                <i class="flaticon-menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop"
                    aria-controls="offcanvasWithBackdrop"></i>
            </a>
            <div class="clearfix"></div>
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                    <li><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
                    <li><a href="#tentang" class="nav-link">Tentang Laskar</a></li>
                    <li><a href="#benefit" class="nav-link">Benefit</a></li>
                    <li><a href="#daftar" class="nav-link">Daftar Beasiswa</a></li>
                    <li><a href="#faq" class="nav-link">Faq</a></li>
                </ul>
            </div>

            <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-link text-decoration-none me-2">Sign In</a>
                    <a href="{{ route('register') }}" class="ins-btn ins-primary-btn">Get Started</a>
                @else
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="{{ asset('admin-asset/images/profile/user-1.jpg') }}" class="rounded-circle"
                                width="35" height="35" alt="User Image" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow-sm border-0 p-0"
                            style="min-width: 250px; border-radius: 12px;">
                            <div class="text-center p-4 border-bottom">
                                <img src="{{ asset('admin-asset/images/profile/user-1.jpg') }}" class="rounded-circle mb-2"
                                    width="80" height="80" alt="User Image" />
                                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                                <small class="text-muted text-wrap d-block" style="word-break: break-all;">
                                    {{ Auth::user()->email }}
                                </small>
                            </div>

                            {{-- Menu Profil --}}
                            <div class="px-3 py-2">
                                <a href="#" class="dropdown-item text-dark d-flex align-items-center">
                                    Profil
                                </a>
                            </div>
                            {{-- Tombol Logout --}}
                            <div class="px-3 pb-3">
                                <a class="btn btn-outline-primary w-100" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>


        </div>
    </nav>
    <!--offcanvas menu end-->
</header>