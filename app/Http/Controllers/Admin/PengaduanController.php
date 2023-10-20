<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\Kategori;

class PengaduanController extends Controller
{
    function index(){
        $data['pengaduan'] = Pengaduan::orderBy('tgl_pengaduan','desc')->get();
        return view('Admin.Pengaduan.index', $data);
    }

    function detail($id){
        $data ['pengaduan'] = Pengaduan::where('id_pengaduan', $id)->first();
        $data ['tanggapan'] = Tanggapan::where('id_pengaduan', $id)->first();
        return view('Admin.Pengaduan.show', $data);
    }
}