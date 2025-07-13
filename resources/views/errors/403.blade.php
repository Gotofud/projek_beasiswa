<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin-asset/images/icon.png') }}" />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('admin-asset/css/styles.css') }}" />

    <title>Forbidden</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('admin-asset/images/icon.png') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>

    <div id="main-wrapper">
        <div
            class="position-relative overflow-hidden min-vh-100 w-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <img src="{{ asset('admin-asset/images/backgrounds/403.png') }}" alt="modernize-img"
                                class="img-fluid" width="500">
                            <h1 class="fw-semibold mb-7 fs-9"> 403 | Forbidden</h1>
                            <h5 class="fw-semibold mb-7">You don't have permission to access a specific resource on a
                                web server.</h5>
                            <a class="btn btn-primary" href="{{ route('admin.index') }}" role="button">Go Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->
    <script src="{{asset('admin-asset/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin-asset/libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('admin-asset/js/theme/app.init.js')}}"></script>
    <script src="{{asset('admin-asset/js/theme/theme.js')}}"></script>
    <script src="{{asset('admin-asset/js/theme/app.min.js')}}"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>