<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="{{ asset('admin-asset/images/logos/favicon.png') }}" />

  <!-- Core Css -->
  <link rel="stylesheet" href="{{ asset('admin-asset/css/styles.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin-asset/libs/sweetalert2/dist/sweetalert2.min.css') }}">

  <title>Modernize Bootstrap Admin</title>
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="{{ asset('admin-asset/libs/owl.carousel/dist/admin-asset/owl.carousel.min.css') }}" />
  <!-- Data Table -->
  <link rel="stylesheet" href="{{ asset('admin-asset/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" />
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="./admin-asset/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <!-- Sidebar -->
    @include('layouts.admin.components.sidebar')
    <div class="page-wrapper">
      <!--  Header Start -->
      @include('layouts.admin.components.navbar')
      <!--  Header End -->

      @if(session('success'))
      <script>
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '{{ session('success') }}',
        timer: 3000,
        showConfirmButton: false
      });
      </script>
    @endif
      <div class="body-wrapper">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>

    </div>

    <script src="{{ asset('admin-asset/js/vendor.min.js') }}"></script>
    <!-- Import Js Files -->
    <script src="{{ asset('admin-asset/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin-asset/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin-asset/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('admin-asset/js/theme/theme.js') }}"></script>
    <script src="{{ asset('admin-asset/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('admin-asset/js/theme/sidebarmenu.js') }}"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="{{ asset('admin-asset/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin-asset/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin-asset/js/dashboards/dashboard.js') }}"></script>
    <script src="{{ asset('admin-asset/js/forms/sweet-alert.init.js') }}"></script>
    <script src="{{ asset('admin-asset/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-asset/js/datatable/datatable-basic.init.js') }}"></script>
    <script>
      $(document).ready(function () {
        let table = $('.dataTable').DataTable();

         $('#customSearch').on('keyup', function () {
            table.search(this.value).draw();
        });
      });
    </script>
    @stack('scripts')
</body>

</html>