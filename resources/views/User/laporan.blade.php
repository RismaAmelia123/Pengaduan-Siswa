@extends('layout.user')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<link rel="stylesheet" href="{{ asset('css/laporan.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@endsection

@section('title', 'SMK YPC TASIKMALAYA- Pengaduan Siswa')

@section('content')
{{-- Navbar --}}
{{-- <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <div class="navbar-brand text-dark">
            <h4 class="semi-bold  mt-1 mb-0">SMK YPC TASIKMALAYA</h4>
            <p class="lead mt-0">Pengaduan Siswa</p>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav text-center ml-auto">
                <li class="nav-item">
                    <a href="/laporan" class="nav-link text-primary">LAPORAN</a>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link text-decoration-none text-primary">{{ Auth::guard('siswa')->user()->nama }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}
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
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link"href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Alur Pengaduan</a>
                </li>
                <li class="nav-item">
                    <a href="laporan" class="nav-link">Laporan</p></a>
                </li>
                <li class="nav-item">
                    <a href="logout" class="nav-link text-decoration-none">{{ Auth::guard('siswa')->user()->nama }}</p></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- Akhir Navbar --}}

{{-- Card Laporan --}}
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12 col">
            <div class="card shadow">
                <div class="card-body">
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-primary alert-dismissible" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ $error }}
                      </div>
                    @endforeach
                    @endif
                    @if (Session::has('pengaduan'))
                    <div class="alert alert-primary alert-dismissible" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ Session::get('pengaduan') }}
                      </div>
                    @endif
                    <h5 class="mb-3 text-center">Tulis Laporan Anda Disini</h5>
                    <form action="{{ url('store/pengaduan') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="kategori" class="form-label fw-bold">Kategori</label>
                        <select name="id_kategori" id="id_kategori" class="select2 form-select form-select-lg" data-allow-clear="true">
                            <option value="">Pilih Kategori</option>
                            @foreach ($kategori as $item)
                                <option value="{{ $item->id_kategori }}">{{ $item->kategori }}</option>{{ old('id_kategori') }}
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="tgl_kejadian" class="form-label fw-bold">Tanggal Kejadian</label>
                        <input type="date" name="tgl_kejadian" id="tgl_kejadian" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="isi_laporan" class="form-label fw-bold">Isi Laporan</label>
                        <textarea name="isi_laporan" placeholder="Masukkan Isi Laporan" class="form-control" rows="4">{{ old('isi_laporan') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto" class="form-label fw-bold">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                        <small class="text-danger">kirim bukti berupa foto jika ada</small>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm w-100">Kirim</button>
                    {{-- <input type="submit" value="Kirim" class="form-control text-white bg-primary"> --}}
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 col">
            <div class="content content-bottom shadow">
                <div class="row">
                    <div class="col-md-3">
                        <img src="/storage/{{ Auth::guard('siswa')->user()->foto }}" alt="profile" class="img-thumbnail rounded-circle" width="90">
                    </div>
                    <div class="col-md-9">
                        <h5 class="text-primary">{{ Auth::guard('siswa')->user()->nama }}</h5>
                        <p class="text-dark">{{ Auth::guard('siswa')->user()->nisn }}</p>
                    </div>
                </div>
                <div class="row text-center py-3">
                    <div class="col">
                        <p class="italic mb-0">Terverifikasi</p>
                        <div class="text-center">
                            {{ $hitung[0] }}
                        </div>
                    </div>
                    <div class="col">
                        <p class="italic mb-0">Proses</p>
                        <div class="text-center">
                            {{ $hitung[1] }}
                        </div>
                    </div>
                    <div class="col">
                        <p class="italic mb-0">Selesai</p>
                        <div class="text-center">
                            {{ $hitung[2] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-8">
            {{-- <a class="d-inline tab {{ $siapa != 'me' ? 'tab-active' : ''}} mr-4 text-primary" href="{{ url('laporan') }}">
                Semua
            </a> --}}
            <a class="d-inline tab {{ $siapa == 'me' ? 'tab-active' : ''}} text-primary" href="{{ url('laporan', 'me') }}">
                Laporan Saya
            </a>
            <hr>
        </div>
        @foreach ($pengaduan as $key => $item)
        <div class="col-lg-8">
            <div class="laporan-top">
                    <img src="/storage/{{ $item->siswa->foto }}" alt="profile" class="profile">
                <div class="d-flex justify-content-between">
                    <div>
                        <p>{{ $item->siswa->nama }}</p>
                        @if ($item->status == '0')
                        <p class="text-danger">Pending</p>
                        @elseif($item->status == 'proses')
                        <p class="text-warning">{{ ucwords($item->status) }}</p>
                        @else
                        <p class="text-success">{{ ucwords($item->status) }}</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ $item->tgl_pengaduan }}</p>
                    </div>
                </div>
            </div>
            <div class="laporan-mid">
                <div class="d-flex justify-content-between">
                    <div class="laporan-bottom">
                        <p>{{ $item->isi_laporan }}</p>
                        @if ($item->foto != null)
                            <img src="/storage/{{ $item->foto }}" alt="Gambar Pengaduan">
                        @endif
                        @if ($item->tanggapan != null)
                            <p class="mt-3 mb-1 fw-bold text-primary">{{ '*Tanggapan dari '. $item->tanggapan->petugas->nama_petugas }}</p>
                            <p class="light">{{ $item->tanggapan->tanggapan }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <hr>
        </div>
        @endforeach
    </div>
</div>

{{-- Footer --}}
<div class="mt-5">
    <hr>
    <div class="text-center">
        <p class="italic text-secondary">Copyright &copy SMK • All rights reserved</p>
    </div>
</div>
{{-- Akhir footer --}}
@endsection