<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Siswa;
use App\Models\Pengaduan;
use App\Models\Kategori;

class UserController extends Controller
{
    function index(){
        return view('User.landing');
    }

    function formLogin(){
        return view('User.login');
    }

    function login(Request $request){
        $nisn = Siswa::where('nisn', $request->nisn)->first();
        if(!$nisn){
            return redirect()->back()->with(['pesan'=>'Nisn tidak terdaftar']);
        }
        $password = Hash::check($request->password, $nisn->password);
        if(!$password){
            return redirect()->back()->with(['pesan'=>'Password tidak sesuai']);
        }
        $auth = Auth::guard('siswa')->attempt(['nisn'=>$request->nisn, 'password'=>$request->password]);

        if($auth){
            return redirect('/');
        }else{
            return redirect()->back()->with(['pesan'=>'Akun tidak terdaftar']);
        }
    }

    // function formRegister(){
    //     return view ('User.register');
    // }

    // function register(Request $request){
    //     $validate = $this->validate($request, [
    //         'nis' => ['required'],
    //         'foto' => ['required'],
    //         'nama' => ['required'],
    //         'email' => ['required'],
    //         'password' => ['required'],
    //         'telp' => ['required']
    //     ]);

    //     $email = Siswa::where('email', $request->email)->first();

    //     if ($email) {
    //         return redirect()->back()->with(['pesan' => 'Email sudah terdaftar']);
    //     }

    //     $siswa = Siswa::create([
    //         'nis' => $request->nis,
    //         'foto' => $request->file('foto')->store('foto'),
    //         'nama' => $request->nama,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //         'telp' => $request->telp
    //     ]);
    //     return redirect ('/');
    // }

    function logout(){
        Auth::guard('siswa')->logout();
        return redirect('/');
    }

    function storePengaduan(Request $request){
        
        $validate = $this->validate($request, [
            'isi_laporan' => ['required'],
        ]);
        if ($request->file('foto')) {
            $data ['foto'] = $request->file('foto')->store('foto');
        }
        $pengaduan = Pengaduan::create([
            'tgl_pengaduan' => date('Y-m-d'),
            'nisn' => Auth::guard('siswa')->user()->nisn,
            'id_kategori' => $request->id_kategori,
            'tgl_kejadian' => $request->tgl_kejadian,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $data['foto'] ?? '',
            'status' => '0',
        ]);
        if ($pengaduan) {
            return redirect('laporan')->with(['pengaduan' => 'Berhasil terkirim!', 'type' => 'success']);
        }else{
            return redirect()->back()->with(['pengaduan' => 'Gagal terkirim!', 'type' => 'danger']);
        }
    }
    function laporan($siapa = ''){
        $kategori = Kategori::all();
        $terverifikasi = Pengaduan::where([['nisn', Auth::guard('siswa')->user()->nisn], ['status','!=','0']])->get()->count();
        $proses = Pengaduan::where([['nisn', Auth::guard('siswa')->user()->nisn], ['status','proses']])->get()->count();
        $selesai = Pengaduan::where([['nisn', Auth::guard('siswa')->user()->nisn], ['status','selesai']])->get()->count();
        $hitung = [$terverifikasi, $proses, $selesai];

        // if ($siapa == 'me'){
        //     $pengaduan = Pengaduan::where('nis', Auth::guard('siswa')->user()->nis)->orderBy('tgl_pengaduan', 'desc')->get();
        //     return view('User.laporan', ['pengaduan' => $pengaduan, 'hitung' => $hitung, 'siapa' => $siapa, 'kategori' => $kategori]);
        // }else{
        //     $pengaduan = Pengaduan::where([['nis', '!=', Auth::guard('siswa')->user()->nis], ['status', '!=', '0']])->orderBy('tgl_pengaduan', 'desc')->get();

        // }
        $pengaduan = Pengaduan::where('nisn', Auth()->guard('siswa')->user()->nisn)->orderBy('tgl_pengaduan', 'desc')->get();
        return view('User.laporan', ['pengaduan' => $pengaduan, 'hitung' => $hitung, 'siapa' => $siapa, 'kategori' => $kategori]);
    }
}