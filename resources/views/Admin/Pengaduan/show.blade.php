@extends('layout.admin')

@section('title', 'Detail Pengaduan')

@section('header')
    <a href="{{ url('pengaduan') }}">Data Pengaduan</a>
    <a href="#">|</a>
    <a href="#">Detail Pengaduan</a> 
@endsection
    
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-5 col-lg-5 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2"></h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <tbody>
                                <tr>
                                    <th>NISN</th>
                                    <td>:</td>
                                    <td>{{ $pengaduan->nisn }}</td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>:</td>
                                    <td>{{ $pengaduan->siswa->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Pengaduan</th>
                                    <td>:</td>
                                    <td>{{ $pengaduan->tgl_pengaduan }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Kejadian</th>
                                    <td>:</td>
                                    <td>{{ $pengaduan->tgl_kejadian }}</td>
                                </tr>
                                <tr>
                                    <th>Bukti Foto</th>
                                    <td>:</td>
                                    <td><img src="/storage/{{ $pengaduan->foto }}" alt="Foto Pengaduan" width="150" height="150"></td>
                                </tr>
                                <tr>
                                    <th>Kategori</th>
                                    <td>:</td>
                                    <td>{{ $pengaduan->kategori[0]->kategori }}</td>
                                </tr>
                                <tr>
                                    <th>Isi Laporan</th>
                                    <td>:</td>
                                    <td>{{ $pengaduan->isi_laporan }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>:</td>
                                    <td>
                                        @if ($pengaduan->status == '0')
                                            <a href="#" class="badge bg-label-danger">Pending</a>
                                        @elseif ($pengaduan->status == 'proses')
                                            <a href="#" class="badge bg-label-warning">Proses</a>
                                        @else
                                            <a href="#" class="badge bg-label-success">Selesai</a>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-lg-7 order-2 mb-4">
            <div class="card border-left-primary shadow h-100">
                <div class="card-header">
                    <div class="text-center">
                        Tanggapan Petugas
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('tanggapan') }}" method="post">
                        @csrf
                        <input type="hidden" name="id_pengaduan" value="{{ $pengaduan->id_pengaduan }}">
                        <div class="form-group">
                            <label for="status" class="form-label mb-2">Status</label>
                            <div class="input-group mb-3">
                                <select name="status" id="status" class="select2 form-select form-select-lg" data-allow-clear="true">
                                    @if ($pengaduan->status == '0')
                                        <option selected value="0">Pending</option>
                                        <option value="proses">Proses</option>
                                        <option value="selesai">Selesai</option>
                                    @elseif($pengaduan->status == 'proses')
                                        <option value="0">Pending</option>
                                        <option selected value="proses">Proses</option>
                                        <option value="selesai">Selesai</option>
                                    @else
                                        <option value="0">Pending</option>
                                        <option value="proses">Proses</option>
                                        <option selected value="selesai">Selesai</option>
                                    @endif
                                </select>
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggapan" class="form-label mb-2">Tanggapan</label>
                            <textarea name="tanggapan" id="tanggapan" rows="6" class="form-control mb-3" placeholder="Belum ada tanggapan">{{ $tanggapan->tanggapan ?? '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary text-white" style="width: 100%">Kirim</button>
                    </form>
                    @if (Session::has('status'))
                    <div class="alert alert-success mt-2">
                        {{ Session::get('status') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection