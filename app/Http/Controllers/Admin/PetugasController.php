<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Petugas;

class PetugasController extends Controller
{
    function index(){
        $data ['petugas'] = Petugas::orderBy('id_petugas', 'desc')->get();
        return view('Admin.Petugas.index', $data);
    }

    function add(){
        return view('Admin.Petugas.create');
    }

    function create(Request $request){
        $validate = $this->validate($request, [
            'nama_petugas' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'unique:petugas'],
            'password' => ['required', 'string', 'min:6'],
            'kontak' => ['required'],
            'level' => ['required', 'in:admin,petugas'],
        ]);
        $validate['password'] = bcrypt($request->password);
        Petugas::create($validate);
        return redirect('petugas')->with('status','Berhasil Menambahkan Petugas!');
    }

    function delete($id){
        Petugas::where('id_petugas',$id)->delete();
        return redirect('petugas');
    }

    function edit($id){
        $data ['petugas'] = Petugas::find($id);
        return view('Admin.Petugas.edit',$data);
    }

    function update(Request $request){
        Petugas::where('id_petugas', $request->id)->update([
            'nama_petugas' => $request->nama_petugas,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'kontak' => $request->kontak,
            'level' =>$request->level
        ]);
        return redirect('petugas')->with('status','Berhasil Mengubah Petugas!');
    }
}
