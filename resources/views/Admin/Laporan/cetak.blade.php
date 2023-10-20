<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Laporan Pengaduan</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                    <th class="p-3"><img src="https://res.cloudinary.com/dcn8ihnvx/image/upload/v1692685744/YPC_gwqopy.png" alt="Logo YPC" width="125"></th>
                    <th><h5 class="fw-bold text-center">YAYASAN PESANTREN CINTAWANA</h5>
                        <h5 class="fw-bold text-center">SEKOLAH MENENGAH KEJURUAN</h5>
                        <small>Komplek Pesantren Cintawana Desa Cikunten Singaparna Kabupaten Tasikmalaya Jawa Barat Kode Pos 46414 Telp. 0265 546717 08112224563 email: smkypctasikmalaya@gmail.com website: smk-ypc.sch.id</small>
                    </th>
                </tr>
            </table>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Isi Laporan</th>
                        <th>Kategori</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
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
                            <td>{{ $item->status == '0' ? 'Pending' : ucwords($item->status) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>