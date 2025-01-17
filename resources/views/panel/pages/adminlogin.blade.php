<!DOCTYPE html>

<html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Yonetim Giriş</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset("panel/assets/img/favicon/favicon.ico")}}"/>

    <!-- Fonts -->

    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset("panel/assets/vendor/fonts/boxicons.css")}}"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset("panel/assets/vendor/css/core.css")}}"
          class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{asset("panel/assets/vendor/css/theme-default.css")}}"
          class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="{{asset("panel/assets/css/demo.css")}}"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset("panel/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css")}}"/>

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{asset("panel/assets/vendor/css/pages/page-auth.css")}}"/>
    <!-- Helpers -->
    <script src="{{asset("panel/assets/vendor/js/helpers.js")}}"></script>

    <script src="{{asset("panel/assets/js/config.js")}}"></script>
</head>

<body>
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="{{route("panel.login.get")}}" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                            <img src="https://st3.depositphotos.com/27847728/34562/v/450/depositphotos_345626094-stock-illustration-initial-monogram-letter-ns-logo.jpg" style="width: 200px" alt="logo">
                        </a>
                    </div>
                    <!-- /Logo -->


                    <form id="formAuthentication" class="mb-3" action="{{route("panel.login")}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Adresiniz</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="Email adresinizi giriniz"
                                autofocus
                            />
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Şifre</label>
                                <a href="auth-forgot-password-basic.html">
                                    <small>Şifremi Unuttum ?</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge">
                                <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password"
                                />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me"/>
                                <label class="form-check-label" for="remember-me">Beni Hatırla</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit">Giriş Yap</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

<!-- / Content -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset("panel/assets/vendor/libs/jquery/jquery.js")}}"></script>
<script src="{{asset("panel/assets/vendor/libs/popper/popper.js")}}"></script>
<script src="{{asset("panel/assets/vendor/js/bootstrap.js")}}"></script>
<script src="{{asset("panel/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js")}}"></script>

<script src="{{asset("panel/assets/vendor/js/menu.js")}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="{{asset("panel/assets/js/main.js")}}"></script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
