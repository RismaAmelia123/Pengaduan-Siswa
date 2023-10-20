@extends('layout.user')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title', 'SMK YPC TASIKMALAYA - Pengaduan Siswa')

@section('content')
    <nav class="mb-10 navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h4 class="fw-bold">SMK YPC TASIKMALAYA</h4>
                <small>Jl. Garut - Tasikmalaya, Cikunten, Kec. Singaparna, Kab. Tasikmalaya.</small>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @if(Auth::guard('siswa')->check())
                    <ul class="navbar-nav  ml-auto">
                        <li class="nav-item">
                            <a class="nav-link"href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#alur">Alur Pengaduan</a>
                        </li>
                        <li class="nav-item">
                            <a href="laporan" class="nav-link">Laporan</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="logout" class="nav-link text-decoration-none">{{ Auth::guard('siswa')->user()->nama }}</p></a>
                        </li>
                    </ul>
                @else
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link"href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#alur">Alur Pengaduan</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="btn btn-primary" href="/login">Masuk</a>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>
    <section id="beranda">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    @if (Auth::guard('siswa')->check())
                    <h1 class="jumbo-header mb-30">
                        Selamat Datang {{ Auth::guard('siswa')->user()->nama }} di Sistem Layanan Pengaduan SMK YPC Tasikmalaya
                    </h1>
                    <p class="paragraph mb-30">
                        anda bisa melaporkan semua pengaduan anda di forum ini.
                    </p>
                @else
                <h1 class="jumbo-header mb-30">
                    Selamat Datang di Sistem Layanan Pengaduan SMK YPC Tasikmalaya
                </h1>
                <p class="paragraph mb-30">
                    anda bisa melaporkan semua pengaduan anda di forum ini.
                </p>
                @endif    
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('assets/img/gambar.png') }}" alt="Gambar" width="100%">
                </div>
            </div>
        </div>
    </section>
    
    <section id="tentang">
        <div class="container mt-5">
            <div class="row text-center mb-5">
                <div class="col-lg-12">
                    <h3 class="jumbo-header mb-30">Untuk Apa Sistem Ini Dibuat?</h3>
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <h5>Sistem Layanan Pengaduan SMK YPC Tasikmalaya ini dibuat untuk menampung pengaduan dari semua siswa SMK YPC Tasikmalaya. Diharapkan dengan sistem ini siswa dapat lebih mudah untuk melaporkan pengaduan.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="alur">
        <div class="container">
            <div class="row text-center mb-50 mt-5">
                <div class="col-lg-12">
                    <h3 class="jumbo-header mb-30">Bagaimana Alur Pengaduan?</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <i class="bi bi-box-arrow-in-right"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                      </svg>
                                    <h4 class="mt-4 fw-bold">1. Masuk / Login</h4>
                                    <p class="paragraph mb-30">Masuk ke sistem ini dengan nisn dan password yang sudah terdaftar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <i class="bi bi-plus-circle"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                    <h4 class="mt-4 fw-bold">2. Buat Pengaduan</h4>
                                    <p class="paragraph mb-30">Klik fitur "Laporan" yang tersedia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <i class="bi bi-pencil-square"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                      </svg>
                                    <h4 class="mt-4 fw-bold">3. Lengkapi Form</h4>
                                    <p class="paragraph mb-30">Isi semua form yang sudah disediakan dengan data yang benar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <i class="bi bi-paperclip"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                                      </svg>
                                    <h4 class="mt-4 fw-bold">4. Tambahkan Berkas Pendukung (Jika Ada)</h4>
                                    <p class="paragraph mb-30">Tambahkan berkas pendukung, agar laporan bisa lebih jelas dan mudah dipahami.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <i class="bi bi-send"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                        <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                                      </svg>
                                    <h4 class="mt-4 fw-bold">5. Kirim Pengaduan</h4>
                                    <p class="paragraph mb-30">Kirim pengaduan agar nantinya bisa dicek dan ditanggapi oleh petugas dari sekolah.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
{{-- Navbar --}}
{{-- <nav class="navbar navbar-expand-lg">
    <div class="container">
        <div class="navbar-brand navbar-dark">
            <h4 class="semi-bold  mt-1 mb-0">SMK YPC TASIKMALAYA</h4>
            <p class="lead mt-0">Pengaduan Siswa</p>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @if(Auth::guard('siswa')->check())
                <ul class="navbar-nav text-center ml-auto">
                    <li class="nav-item">
                        <a href="laporan" class="nav-link {{ Request::segment(1) == 'laporan'?'active':'' }} text-primary"><p class="lead mt-0">LAPORAN</p></a>
                    </li>
                    <li class="nav-item">
                        <a href="logout" class="nav-link text-decoration-none text-primary"><p class="lead mt-0">{{ Auth::guard('siswa')->user()->nama }}</p></a>
                    </li>
                </ul>
            @else
            <ul class="navbar-nav text-center ml-auto">
                <li class="nav-item">
                    <a href="{{ url('login') }}" class="nav-link text-decoration-none text-primary"><p class="lead mt-0">MASUK</p></a>
                </li>
            </ul>
            @endauth  
        </div>
    </div>
</nav> --}}
{{-- Akhir Navbar --}}

{{-- <div class="container">
    <div class="card shadow">
        <div class="card-body">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-8 col-sm-8 col-8 col p-5">
                    @if (Auth::guard('siswa')->check())
                        <h1 class="fw-bold">Selamat Datang {{ Auth::guard('siswa')->user()->nama }} <br> di Forum Pengaduan Siswa Online</h1>
                        <p class="fw-bold">anda bisa melaporkan semua pengaduan anda di forum ini.</p>
                    @else
                        <h1 class="fw-bold">Selamat Datang di Forum Pengaduan Siswa Online</h1>
                        <p class="fw-bold">anda bisa melaporkan semua pengaduan anda di forum ini.</p>
                    @endif
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-4" >
                    <img src="{{ asset('assets/img/images.png') }}" alt="Gambar" width="100%">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5"> --}}
    {{-- <div class="row">
        <h6>CONTACT</h6>
        <hr>
        <div class="mb-2">
            <i class="bi bi-geo-alt"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg> Komplek Pesantren Cintawana Desa Cikunten Singaparna Kabupaten Tasikmalaya Jawa Barat Kode Pos 46414 
        </div>
        <div class="mb-2">
            <i class="bi bi-envelope"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg> smkypctasikmalaya@gmail.com
        </div>
        <div class="mb-2">
            <i class="bi bi-envelope"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg>
                https://www.smk-ypc.sch.id
        </div>
        <div class="mb-2">
            <i class="bi bi-telephone"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg> 0265 546717
        </div>
    </div> --}}
    {{-- <div class="row">
        <p>Copyright &copy 2023 SMK YPC TASIKMALAYA</p>            
    </div> --}}
{{-- </div> --}}
@endsection