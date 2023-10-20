<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Petugas;
use App\Models\Pengaduan;
use App\Models\Tanggapan;

class TanggapanController extends Controller
{
    function createOrUpdate(Request $request){
        $pengaduan = Pengaduan::where('id_pengaduan', $request->id_pengaduan)->first();
        $tanggapan = Tanggapan::where('id_pengaduan', $request->id_pengaduan)->first();
        if ($tanggapan) {
            $pengaduan->update(['status' => $request->status]);
            $tanggapan->update([
                'tgl_tanggapan' => date('Y-m-d H:i:s'),
                'tanggapan' => $request->tanggapan,
            ]);
            $url = url ("pengaduan");
            return redirect($url)->with(['status' => 'Berhasil Mengubah Tanggapan!']);;

        }else{
            $pengaduan->update(['status' => $request->status]);
            $tanggapan = Tanggapan::create([
                'id_pengaduan' => $request->id_pengaduan,
                'tgl_tanggapan' => date('Y-m-d H:i:s'),
                'tanggapan' => $request->tanggapan,
                'id_petugas' => Auth::guard('admin')->user()->id_petugas,
            ]);
            $url = url ("pengaduan");
            return redirect($url)->with(['status' => 'Berhasil Menambahkan Tanggapan!']);;
        }
    }
}
