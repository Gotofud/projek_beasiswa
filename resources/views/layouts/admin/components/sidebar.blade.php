<!-- Sidebar Start -->
<aside class="left-sidebar with-vertical">
  <div><!-- ---------------------------------- -->
    <!-- Start Vertical Layout Sidebar -->
    <!-- ---------------------------------- -->
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="{{ route('admin.index') }}" class="text-nowrap logo-img mt-3">
        <img src="{{ asset('admin-asset/images/logo-color.png') }}" class="light-dark" alt="Logo-light" />
      </a>
      <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
        <i class="ti ti-x"></i>
      </a>
    </div>

    <nav class="sidebar-nav scroll-sidebar" data-simplebar>
      <ul id="sidebarnav">
        <!-- ---------------------------------- -->
        <!-- Home -->
        <!-- ---------------------------------- -->
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Home</span>
        </li>
        <!-- ---------------------------------- -->
        <!-- Dashboard -->
        <!-- ---------------------------------- -->
        <li class="sidebar-item">
          <a class="sidebar-link {{ request()->routeIs('admin.index') ? 'active' : '' }}"
            href="{{ route('admin.index') }}" id="get-url" aria-expanded="false">
            <span>
              <i class="ti ti-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Manajemen</span>
        </li>
        <!-- If Role = Admin -->
        @if (in_array(Auth::user()->role, ['admin']))
      <li class="sidebar-item">
        <a class="sidebar-link {{ request()->routeIs('admin.reviewer.*') ? 'active' : '' }}"
        href="{{ route('admin.reviewer.index') }}" aria-expanded="false">
        <span>
          <i class="ti ti-users"></i>
        </span>
        <span class="hide-menu">Manajemen Reviewer</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('admin.peserta.index') }}" aria-expanded="false">
        <span>
          <i class="ti ti-users"></i>
        </span>
        <span class="hide-menu">Manage Akun</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link {{ request()->routeIs('admin.prodi.*') ? 'active' : '' }}"
        href="{{ route('admin.prodi.index') }}" aria-expanded="false">
        <span>
          <i class="ti ti-apps"></i>
        </span>
        <span class="hide-menu">Manajemen Prodi</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link {{ request()->routeIs('admin.universitas.*') ? 'active' : '' }}"
        href="{{ route('admin.universitas.index') }}" aria-expanded="false">
        <span>
          <i class="ti ti-school"></i>
        </span>
        <span class="hide-menu">Manajemen Universitas</span>
        </a>
      </li>
      <!-- End Admin -->
    @else
      <!-- If Role = Reviewer -->
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('admin.peserta.index') }}" aria-expanded="false">
        <span>
          <i class="ti ti-users"></i>
        </span>
        <span class="hide-menu">Manage Akun</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('admin.dokumen.index') }}" aria-expanded="false">
        <span>
          <i class="ti ti-clipboard-list"></i>
        </span>
        <span class="hide-menu">Validasi Dokumen</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('admin.penilaian.index') }}" aria-expanded="false">
        <span>
          <i class="ti ti-category-2"></i>
        </span>
        <span class="hide-menu">Penilaian Hasil Ujian</span>
        </a>
      </li>
      <!-- End Reviewer -->
    @endif
      </ul>
    </nav>
    <!-- ---------------------------------- -->
    <!-- END OF MENU -->
    <!-- ---------------------------------- -->



    <!-- ---------------------------------- -->
    <!-- Start Vertical Layout Sidebar -->
    <!-- ---------------------------------- -->
  </div>
</aside>
<!--  Sidebar End -->