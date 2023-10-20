{{-- @extends('layout.user')
@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
    </style>
@endsection

@section('title','Halaman Login')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row d-flex justify-content-center">
        <div class="col-md-3 col-lg-3 order-2 mb-4">
            <h1 class="text-center mb-0 mt-5">SMK YPC</h1>
            <P class="text-center mb-5">Pengaduan Siswa</P>
            <div class="card mt-5">
                <div class="card-body">
                    <h3 class="text-center mb-4">Login</h3>
                    <form action="{{ url('login/auth') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password" required>
                        </div>
                        <button type="submit" class="btn text-white mt-3 form-control" style="background-color: #7231ff">Masuk</button>
                    </form>
                </div>
            </div>
            @if (Session::has('pesan'))
                <div class="alert alert-danger mt-2">
                    {{ Session::get('pesan') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Login</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              @if (Session::has('pesan'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  {{ session('pesan') }}
                </div>
              @endif
              <!-- Logo -->
                <div class="app-brand justify-content-center">
                    <h2 class="fw-bold">Login</h2>
                </div>
              <!-- /Logo -->
                <h4 class="mb-2">Selamat Datang Di Pengaduan Siswa! 👋</h4>
                <p class="mb-4">Silakan masuk ke akun Anda</p>
                <form id="formAuthentication" class="mb-3" action="{{ url('login/auth') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nisn" class="form-label">Username</label>
                        <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukan username" autofocus/>
                    </div>
                    <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Kata Sandi</label>
                    </div>
                    <div class="input-group input-group-merge">
                        <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                    </div>
                    <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember-me" />
                        <label class="form-check-label" for="remember-me"> Ingat Saya </label>
                    </div>
                    </div>
                    <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
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
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
