<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    function index(){
        $data ['siswa'] = Siswa::orderBy('kelas', 'asc')->get();
        return view('Admin.Siswa.index',$data);
    }

    function add(){
        return view('Admin.Siswa.create');    
    }

    function create(Request $request){
        // if ($request->file('foto')) {
        //     $data ['foto'] = $request->file('foto')->store('foto');
        // }
        // Siswa::create([
        //     'nisn' => $request->nisn,
        //     'nis' => $request->nis,
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat,
        //     'kontak' => $request->kontak,
        //     'tl' => $request->tl,
        //     'tgl' => $request->tgl,
        //     'jk' => $request->jk,
        //     'status' => $request->status,
        //     'password' => bcrypt($request->password),
        //     'foto' => $data['foto'] ?? '',
        // ]);
        $validate = $this->validate($request,[
            'nisn' => 'required|numeric',
            'nis' => 'required|numeric',
            'nama' => 'required|string',
            'kelas' => 'required|string',
            'alamat' => 'required|string|min:5',
            'kontak' => 'required|numeric',
            'tl' => 'required|string',
            'tgl' => 'required|date',
            'jk' => 'required|string',
            'status' => 'required|string',
            'password' => 'required|string',
            'foto' => 'required|mimes:jpg,png,jpeg',
        ]);

        $namafile = $request->nisn.".".$request->file('foto')->getClientOriginalExtension();
        $validate['foto'] = $request->file('foto')->storeAs('foto',$namafile);
        Siswa::create($validate);
        return redirect('siswa')->with('status','Berhasil Menambahkan Siswa!');
    }

    function edit($id){
        $data ['siswa'] = Siswa::find($id);
        return view('Admin.Siswa.edit', $data);
    }

    function update(Request $request){
        $data = Siswa::where('nisn',$request->nisn)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
        }
        if($request->password == ''){
            $password = $data->password;
        }else{
            $password = bcrypt($request->password);
        }
        Siswa::where('nisn', $request->id)->update([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'tl' => $request->tl,
            'tgl' => $request->tgl,
            'jk' => $request->jk,
            'status' => $request->status,
            'password' => $password,
            'foto' => $foto,
        ]);
        return redirect('siswa')->with('status','Berhasil Mengubah Siswa!');
    }
    
    function delete($id){
        Siswa::where('nisn',$id)->delete();
        return redirect('siswa');
    }
    
    function detail($id){
        $data ['siswa'] = Siswa::find($id);
        return view('Admin.Siswa.show',$data);
    }
}