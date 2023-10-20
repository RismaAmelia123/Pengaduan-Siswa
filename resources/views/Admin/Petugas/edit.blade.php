@extends('layout.admin')

@section('title', 'Edit Petugas')

@section('header')
    <a href="{{ url('petugas') }}">Data Petugas</a>
    <a href="#">|</a>
    <a href="#">Edit Petugas</a> 
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12 col-lg-12 order-2 mb-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Edit Petugas</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('petugas/update', $petugas->id_petugas) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama_petugas" class="mb-2">Nama Petugas</label>
                            <input type="text" value="{{ $petugas->nama_petugas }}" name="nama_petugas" id="nama_petugas" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="mb-2">Email</label>
                            <input type="email" value="{{ $petugas->email }}" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label mt-2" for="password">Kata Sandi</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kontak" class="mb-2">Kontak</label>
                            <input type="number" value="{{ $petugas->kontak }}" name="kontak" id="kontak" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="level" class="mb-2">Level</label>
                            <div class="input-group mb-3">
                                <select name="level" id="level" class="form-control">
                                    @if ($petugas->level == 'admin')
                                        <option selected value="admin">Admin</option>
                                        <option value="petugas">Petugas</option>
                                    @else
                                    <option value="admin">Admin</option>
                                    <option selected value="petugas">Petugas</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary text-white" style="width: 100%">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection