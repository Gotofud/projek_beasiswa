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
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!--meta-->
    <meta name="description"
        content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="author" content="ThemeTags">

    <!--favicon icon-->
    <link rel="icon" href="user/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Login - Software & IT Solutions HTML Template</title>

    <!-- Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet">
    <!-- Font -->

    <!--build:css-->
    <link rel="stylesheet" href="user/css/main.css">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="user/css/custom.css">
    <!--custom css end-->

</head>

<body>

    <!--preloader start-->
    <div id="preloader" class="bg-light-subtle">
        <div class="preloader-wrap">
            <img src="user/img/favicon.png" alt="logo" class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--register section start-->
        <section class="sign-up-in-section bg-dark ptb-60"
            style="background: url('user/img/page-header-bg.svg')no-repeat right bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-8 col-12">
                        <a href="index.html" class="mb-4 d-block text-center"><img src="user/img/logo-white.png"
                                alt="logo" class="img-fluid"></a>
                        <div class="register-wrap p-5 bg-light-subtle shadow rounded-custom">
                            <h1 class="h3">Nice to Seeing You Again</h1>
                            <p class="text-muted">Please log in to access your account web-enabled methods of innovative
                                niches.</p>

                            <form action="{{ route('login') }}" method="POST" class="mt-4 register-form">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="email" class="mb-1">Email <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email" id="email"
                                                required aria-label="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="password" class="mb-1">Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Password"
                                                id="password" required aria-label="Password" name="password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-3 d-block w-100">Submit</button>
                                    </div>
                                </div>
                                <div
                                    class="position-relative d-flex align-items-center justify-content-center mt-4 py-4">
                                    <span class="divider-bar"></span>
                                    <h6 class="position-absolute text-center divider-text bg-light-subtle mb-0">Or</h6>
                                </div>
                                <div class="action-btns">
                                    <a href="#"
                                        class="btn google-btn bg-white shadow-sm mt-4 d-block d-flex align-items-center text-decoration-none justify-content-center">
                                        <img src="user/img/google-icon.svg" alt="google" class="me-3">
                                        <span>Connect with Google</span>
                                    </a>
                                </div>
                                <p class="font-monospace fw-medium text-center text-muted mt-3 pt-4 mb-0">Don’t have an
                                    account? <a href="{{ route('register') }}" class="text-decoration-none">Sign up
                                        Today</a>
                                    <br>
                                    <a href="password-reset.html" class="text-decoration-none">Forgot password</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->
    </div>

    <!--build:js-->
    <script src="{{ asset('user/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('user/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('user/js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('user/js/vendors/parallax.min.js') }}"></script>
    <script src="{{ asset('user/js/vendors/aos.js') }}"></script>
    <script src="{{ asset('user/js/vendors/massonry.min.js') }}"></script>
    <script src="{{ asset('user/js/app.js') }}"></script>
    <!--endbuild-->
</body>

</html>