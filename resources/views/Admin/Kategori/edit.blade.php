@extends('layout.admin')

@section('title', 'Edit Kategori')

@section('header')
    <a href="{{ url('kategori') }}">Data Kategori</a>
    <a href="#">|</a>
    <a href="#">Edit Kategori</a> 
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
                    <h5 class="card-title m-0 me-2">Edit Kategori</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('kategori/update', $kategori->id_kategori) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="kategori" class="form-label mb-2">Kategori</label>
                            <input type="text" value="{{ $kategori->kategori }}" name="kategori" id="kategori" class="form-control mb-3">
                        </div>
                        <button type="submit" class="btn btn-primary text-white" style="width: 100%">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection