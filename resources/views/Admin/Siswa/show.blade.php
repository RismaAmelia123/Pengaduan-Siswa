@extends('layout.admin')

@section('title', 'Detail Siswa')

@section('header')
    <a href="{{ url('siswa') }}">Data Siswa</a>
    <a href="#">|</a>
    <a href="#">Detail Siswa</a> 
@endsection

<style>
    table, th, td {
      /* border: 1px solid; */
      /* text-align: center; */
    }
</style>

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12 col-lg-12 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Data Siswa</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <tbody>
                                <tr>
                                    <td colspan="3" class="align-middle text-center">
                                        <img src="/storage/{{ $siswa->foto }}" alt="profile" class=" rounded-circle" width="150">
                                    </td>
                                </tr>
                                <tr>
                                    <th>NISN</th>
                                    <td>:</td>
                                    <td>{{ $siswa->nisn}}</td>
                                </tr>
                                <tr>
                                    <th>NIS</th>
                                    <td>:</td>
                                    <td>{{ $siswa->nis}}</td>
                                </tr>
                                <tr>
                                    <th>Nama Siswa</th>
                                    <td>:</td>
                                    <td>{{ $siswa->nama}}</td>
                                </tr>
                                 <tr>
                                    <th>Kelas</th>
                                    <td>:</td>
                                    <td>{{ $siswa->kelas}}</td>
                                </tr>
                                <tr>
                                    <th>Alamat Siswa</th>
                                    <td>:</td>
                                    <td>{{ $siswa->alamat}}</td>
                                </tr>
                                <tr>
                                    <th>No Hp. Siswa</th>
                                    <td>:</td>
                                    <td>{{ $siswa->kontak}}</td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>:</td>
                                    <td>{{ $siswa->tl}}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>:</td>
                                    <td>{{ $siswa->tgl}}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>:</td>
                                    <td>
                                    @if ($siswa->jk == 'L')
                                        <p>LAKI - LAKI</p>
                                    @else
                                        <p>PEREMPUAN</p>
                                    @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>:</td>
                                    <td>
                                        @if ($siswa->status == 'A')
                                            <p class="badge bg-label-success">AKTIF</p>
                                        @else
                                            <p class="badge bg-label-danger">TIDAK AKTIF</p>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection