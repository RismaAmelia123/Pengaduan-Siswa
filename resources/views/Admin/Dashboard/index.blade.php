@extends('layout.admin')

@section('title', 'Dashboard')
    
@section('header', 'Dashboard')

@section('content')
{{-- <div class="container-fluid">
    <div class="row">
        <div class="col-md-3 mb-5">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Petugas</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">{{ $petugas }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-5">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Siswa</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">{{ $siswa }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-5">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pengaduan Proses</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">{{ $proses }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-5">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pengaduan Selesai</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">{{ $selesai }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengaduan</h6>
                </div>
                <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                    @foreach ($pengaduan as $item)
                        <div class="divide-y">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar"></span>
                                </div>
                                <div class="col">
                                    <div class="text-truncate">
                                        <strong>{{ $item->siswa->nama }}</strong>
                                    </div>
                                    <div class="text-secondary">{{ $item->tgl_pengaduan }}</div>
                                </div>
                                <div class="col-auto align self-center">
                                    <div>
                                        @if ($item->status == '0')
                                            <a href="" class="badge badge-danger">Pending</a>
                                        @elseif ($item->status == 'proses')
                                            <a href="" class="badge badge-warning text-white">Proses</a>
                                        @else
                                            <a href="" class="badge badge-success">Selesai</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-bpdy">
                    <canvas id="canvas" height="280" width="600">
                    </canvas>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <span class="fw-semibold d-block mb-1">Petugas</span>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h2>{{ $petugas }}</h2></div>
                    </div>
                    <div class="col-auto">
                        <img src="{{ asset('assets/img/Teacher.webp') }}" alt="Teacher" width="100px">
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <span class="fw-semibold d-block mb-1">Siswa</span>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h2>{{ $siswa }}</h2></div>
                    </div>
                    <div class="col-auto">
                        <img src="{{ asset('assets/img/Student Male.webp') }}" alt="Teacher" width="100px">
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <span class="fw-semibold d-block mb-1">Pengaduan Proses</span>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h2>{{ $proses }}</h2></div>
                    </div>
                    <div class="col-auto">
                        <img src="{{ asset('assets/img/4818154.webp') }}" alt="Teacher" width="100px">
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <span class="fw-semibold d-block mb-1">Pengaduan Selesai</span>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h2>{{ $selesai }}</h2></div>
                    </div>
                    <div class="col-auto">
                        <img src="{{ asset('assets/img/Check Report.png') }}" alt="Teacher" width="100px">
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h5>Pengaduan Baru</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal Pengaduan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($pengaduan as $key =>  $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item->siswa->nama }}</td>
                            <td>{{ $item->tgl_pengaduan }}</td>
                            <td>
                                @if ($item->status == '0')
                                <a href="" class="badge bg-label-danger">Pending</a>
                                @elseif ($item->status == 'proses')
                                    <a href="" class="badge bg-label-warning">Proses</a>
                                @else
                                    <a href="" class="badge bg-label-success">Selesai</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection