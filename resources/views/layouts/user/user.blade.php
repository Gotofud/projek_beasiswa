<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--twitter og-->
    <meta name="twitter:site" content="@themetags">
    <meta name="twitter:creator" content="@themetags">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Quiety - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
    <meta name="twitter:description"
        content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="twitter:image" content="#">

    <!--facebook og-->
    <meta property="og:url" content="#">
    <meta name="twitter:title" content="Quiety - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
    <meta property="og:description"
        content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta property="og:image" content="#">
    <meta property="og:image:secure_url" content="#">
    <meta property="og:image:type" content="image/png">

    <!--meta-->
    <meta name="description"
        content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="author" content="ThemeTags">

    <!--favicon icon-->
    <link rel="icon" href="user/img/icon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Laskar Beasiswa - Ubah Mimpi jadi nyata</title>

    <!-- Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN (versi 6) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font -->

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('user/css/main.css') }}">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="{{ asset('user/css/custom.css') }}">
    <!--custom css end-->

</head>

<body>

    <!--preloader start-->
    <div id="preloader" class="bg-light-subtle">
        <div class="preloader-wrap">
            <img src="user/img/icon.png" alt="logo" class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper bg-light-subtle">
        <!--header section start-->
        @include('layouts.user.components.navbar')
        <!--header section end-->

        <div class="body-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        <!--footer section start-->
        @include('layouts.user.components.footer')
        <!--footer section end--> <!--footer section end-->
    </div>


    <!--build:js-->
    <script src="user/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="user/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="user/js/vendors/swiper-bundle.min.js"></script>
    <script src="user/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="user/js/vendors/parallax.min.js"></script>
    <script src="user/js/vendors/aos.js"></script>
    <script src="user/js/vendors/massonry.min.js"></script>
    <script src="user/js/app.js"></script>
    <!--endbuild-->
</body>

</html>