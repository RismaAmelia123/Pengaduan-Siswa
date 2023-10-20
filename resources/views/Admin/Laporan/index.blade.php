@extends('layout.admin')

@section('title', 'Laporan')
    
@section('header', 'Laporan Pengaduan')
    
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-5 col-lg-5 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Cari Berdasarkan Tanggal</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('get/laporan') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" name="from" class="form-control" placeholder="Dari Tanggal" onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="to" class="form-control" placeholder="Sampai Tanggal" onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                        </div>
                        <button type="submit" class="btn btn-primary text-white" style="width: 100%">Cari Laporan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-lg-7 order-2 mb-4">
            <div class="card border-left-primary shadow h-100">
                <div class="card-header me-auto">Data Berdasarkan Tanggal
                    <div class="m-0 me-2 py-2">
                        @if ($pengaduan ?? '')
                            <a href="{{ url('cetak') }}" class="btn btn-primary btn-sm">Export PDF</a>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    @if ($pengaduan ?? '')
                        <div class="table-responsive">
                            <table class="table text-nowrap" id="dataTable" width="100%" cellspacing="0">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Isi Laporan</th>
                                        <th>Kategori</th>
                                        <th>Status</th>  
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0 text-center">
                                    @foreach ($pengaduan as $key => $item)
                                        <tr>
                                            <td>{{ $key+=1 }}</td>
                                            <td>{{ $item->tgl_pengaduan}}</td>
                                            <td>{{ $item->isi_laporan }}</td>
                                            <td>
                                                @foreach ($item->kategori as $kategori)
                                                    {{ $kategori->kategori }}
                                                @endforeach
                                            </td>
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
                    @else
                        <div class="text-center">
                            Tidak Ada Data
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection