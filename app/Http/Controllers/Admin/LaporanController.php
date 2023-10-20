<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Pengaduan;
use App\Models\Kategori;
use PDF;

class LaporanController extends Controller
{
    function index(){
        return view('Admin.Laporan.index');
    }

    function getLaporan(Request $request){
        $kategori = Kategori::all();
        $from = $request->from . ' ' . '00:00:00';
        $to = $request->to . ' ' . '23:59:59';

        $pengaduan = Pengaduan::whereBetween('tgl_pengaduan', [$from, $to])->get();
        return view('Admin.Laporan.index', ['pengaduan' => $pengaduan, 'from' => $from, 'to' => $to, 'kategori' => $kategori]);
    }

    function cetakLaporan(){
        $pengaduan = Pengaduan::get();
        $kategori = Kategori::all();
        view()->share('pengaduan',$pengaduan);
        $pdf = PDF::loadview('Admin.Laporan.cetak', ['kategori' => $kategori]);
        return $pdf->stream('laporan-pengaduan.pdf');
    }
}