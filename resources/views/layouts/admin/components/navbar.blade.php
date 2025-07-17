<header class="topbar">
  <div class="with-vertical"><!-- ---------------------------------- -->
    <!-- Start Vertical Layout Header -->
    <!-- ---------------------------------- -->
    <nav class="navbar navbar-expand-lg p-0">
      <ul class="navbar-nav">
        <li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
          <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
        <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-lg-flex">
          <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="ti ti-search"></i>
          </a>
        </li>
      </ul>

      <div class="d-block d-lg-none py-4">
        <a href="./main/index.html" class="text-nowrap logo-img">
          <img src="{{ asset('admin-asset/images/logos/dark-logo.svg') }}" class="dark-logo" alt="Logo-Dark" />
          <img src="{{ asset('admin-asset/images/logos/light-logo.svg') }}" class="light-logo" alt="Logo-light" />
        </a>
      </div>
      <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)"
        data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="ti ti-dots fs-7"></i>
      </a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <div class="d-flex align-items-center justify-content-between">
          <a href="javascript:void(0)"
            class="nav-link nav-icon-hover-bg rounded-circle mx-0 ms-n1 d-flex d-lg-none align-items-center justify-content-center"
            type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
            aria-controls="offcanvasWithBothOptions">
            <i class="ti ti-align-justified fs-7"></i>
          </a>
          <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
            <!-- ------------------------------- -->
            <!-- end notification Dropdown -->
            <!-- ------------------------------- -->

            <!-- ------------------------------- -->
            <!-- start profile Dropdown -->
            <!-- ------------------------------- -->
            <li class="nav-item dropdown">
              <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                <div class="d-flex align-items-center">
                  <div class="user-profile-img">
                    <img src="{{ asset('admin-asset/images/profile/user-1.jpg') }}" class="rounded-circle" width="35"
                      height="35" alt="modernize-img" />
                  </div>
                </div>
              </a>
              <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                <div class="profile-dropdown position-relative" data-simplebar>
                  <div class="py-3 px-7 pb-0">
                    <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                  </div>
                  <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                    <img src="{{ asset('admin-asset/images/profile/user-1.jpg') }}" class="rounded-circle" width="80"
                      height="80" alt="modernize-img" />
                    <div class="ms-3">
                      <h5 class="mb-1 fs-3">{{ Auth::user()->name }}</h5>
                      <span class="mb-1 d-block">{{ Auth::user()->role }}</span>
                      <p class="mb-0 d-flex align-items-center gap-2">
                        <i class="ti ti-mail fs-4"></i> {{ Auth::user()->email }}
                      </p>
                    </div>
                  </div>
                  <div class="message-body">
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
            </li>
            <!-- ------------------------------- -->
            <!-- end profile Dropdown -->
            <!-- ------------------------------- -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- ---------------------------------- -->
    <!-- End Vertical Layout Header -->
    <!-- ---------------------------------- -->
</header>