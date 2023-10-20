@extends('layout.admin')

@section('title', 'Pengaduan')

@section('header', 'Data Pengaduan')
    
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-12 col-lg-12 order-2 mb-4">
        @if (session('status'))
            <div class="alert alert-primary alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('status') }}
            </div>
        @endif
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2"></h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-nowrap" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Isi Laporan</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Detail</th>  
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
                                    <td>
                                        <a href="pengaduan/detail/{{ $item->id_pengaduan }}"><button type="button" class="btn btn-icon btn-outline-primary"><i class="bx bx-detail"></button></i></a>
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