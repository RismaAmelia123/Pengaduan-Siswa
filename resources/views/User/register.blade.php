{{-- @if ($errors->any())
    <ul>
        @foreach ($errors->all()as $errors)
            <li>{{ $error }}</li>
        @endforeach
    </ul>    
@endif --}}
{{-- <form action="/daftar/create" method="post">
@csrf
<table>
    <tr>
        <td>Nis</td>
        <td><input type="text" name="nis" id="nis" value="{{ old('nis') }}">
        @error('nis')
            *Nis Tidak Sesuai
        @enderror
        </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" id="nama" value="{{ old('nama') }}">
            @error('nama')
            *Nama Tidak Sesuai
        @enderror
        </td>
    </tr>
    <tr>
        <td>Telp</td>
        <td><input type="text" name="telp" id="telp" value="{{ old('telp') }}">
            @error('telp')
            *Telp Tidak Sesuai
        @enderror
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
            *Email Tidak Sesuai
        @enderror
        </td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password" id="password">
            @error('password')
            *Password Minimal 8 Karakter
        @enderror
        </td>
    </tr>
    <tr>
        <td>Konfirmasi Password</td>
        <td><input type="password" name="confirm_password" id="confirm_password"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Daftar" ></td>
    </tr>
</table>
</form> --}}
{{-- @extends('layout.user')
@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <style>
        body{
            font-family: 'Poppins', sans-serif;
            /* background: #5100ff; */
        }
    </style>
@endsection

@section('title','Halaman Daftar')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5">
                <h1 class="text-center mb-0 mt-5">SMK YPC</h1>
                <P class="text-center mb-5">Pengaduan Siswa</P>
                <div class="card mt-3">
                    <div class="card-body">
                        <h3 class="text-center mb-3">Daftar</h3>
                        <form action="{{ url('register/auth') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group mt-3">
                                <label for="nis">Nis</label>
                                <input type="number" name="nis" id="nis" class="form-control" placeholder="Masukan Nis" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" name="foto" id="foto" class="form-control">
                                <small class="text-danger">ukuran foto 1 : 1</small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password" required>
                            </div>
                            <div class="form-group">
                                <label for="telp">No. Telp</label>
                                <input type="number" name="telp" id="telp" class="form-control" placeholder="Masukan No Telp" required>
                            </div>
                            <div class="mt-3">
                                <input type="submit" class="form-control text-white btn" style="background-color: #7231ff" value="Simpan">
                            </div>
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Register</title>
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
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                  <h2 class="fw-bold">Daftar</h2>
                </div>
                <!-- /Logo -->
                {{-- <h4 class="mb-2">Adventure starts here 🚀</h4>
                <p class="mb-4">Jadikan pengelolaan aplikasi Anda mudah dan menyenangkan!</p> --}}
              <form id="formAuthentication" class="mb-3" action="{{ url('register/auth') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nis" class="form-label">Nis</label>
                    <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukan nis" autofocus/>
                  </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama" autofocus/>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto"/>
                    <small class="text-danger">ukuran foto 1 : 1</small>
                  </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email" />
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Kata Sandi</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                    <label for="kontak" class="form-label">Kontak</label>
                    <input type="number" class="form-control" id="telp" name="telp" placeholder="Masukan kontak" />
                </div>
                <div class="mb-3">
                <button class="btn btn-primary d-grid w-100">Simpan</button>
              </form>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ ('assets/vendor/libs/jquery/jquery.js') }}"></script>
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
