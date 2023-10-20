@extends('layout.admin')

@section('title', 'Siswa')

@section('header', 'Data Siswa')

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
                <h6 class=""><a href="{{ url('siswa/add') }}" class="btn btn-primary btn-sm"> <i class="bi bi-plus"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg> Tambah Siswa</a></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-nowrap" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>No Hp. Siswa</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0 text-center">
                            @foreach ($siswa as $key => $item)
                                <tr>
                                    <td>{{ $key+=1 }}</td>
                                    <td>{{ $item->nisn }}</td>
                                    <td>{{ $item->nis }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->kelas }}</td>
                                    <td>{{ $item->kontak }}</td>
                                    <td>
                                        <a href="siswa/detail/{{ $item->nisn }}"><button type="button" class="btn btn-icon btn-outline-primary"><i class="bx bx-detail"></button></i></a>
                                        <a href="siswa/edit/{{ $item->nisn }}"><button type="button" class="btn btn-icon btn-outline-primary"><i class="bx bx-edit-alt me-1"></button></i></a>
                                        <a href="#"><button type="button" class="btn btn-icon btn-outline-danger delete" data-id="{{ $item->nisn }}" data-nama="{{ $item->nama }}"><i class="bx bx-trash-alt"></button></i></a>
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
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('.delete').click(function(){
        var id = $(this).attr('data-id');
        var siswa = $(this).attr('data-nama');
        swal({
        title: "Apa kamu yakin?",
        text: "Anda akan menghapus data "+siswa+"",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "siswa/delete/"+id+""
            swal("File Anda telah dihapus!", {
            icon: "success",
            });
        } else {
            swal("Data Anda aman!");
        }
        });

    });
</script>
@endsection