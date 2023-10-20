<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Petugas;
use App\Models\Siswa;
use App\Models\Pengaduan;

class DashboardController extends Controller
{
    function index(){
        
        $petugas = Petugas::all()->count();
        
        $siswa = Siswa::all()->count();
        
        $proses = Pengaduan::where('status', 'proses')->get()->count();
        
        $selesai = Pengaduan::where('status', 'selesai')->get()->count();
        
        $pengaduan = Pengaduan::orderBy('tgl_pengaduan','desc')->get();

        return view('Admin.Dashboard.index', ['petugas' => $petugas, 'siswa' => $siswa, 'proses'=> $proses, 'selesai' => $selesai, 'pengaduan' => $pengaduan]);
    }
}
