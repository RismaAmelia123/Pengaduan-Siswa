<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    function index(){
        $data ['kategori'] = Kategori::orderBy('id_kategori', 'desc')->get();
        return view('Admin.Kategori.index', $data);
    }

    function add(){
        return view('Admin.Kategori.create');
    }

    function create(Request $request){
        $validated = $request->validate([
            'kategori' => 'required|unique:kategori',
        ]);
        Kategori::create([
            'kategori' => $request->kategori
        ]);
        return redirect('kategori')->with('status','Berhasil Menambahkan Kategori!');
    }

    function delete($id){
        Kategori::where('id_kategori', $id)->delete();
        return redirect('kategori');
    }

    function edit($id){
        $data ['kategori'] = Kategori::find($id);
        return view('Admin.Kategori.edit', $data);
    }

    function update(Request $request){
        $validated = $request->validate([
            'kategori' => 'required|unique:kategori',
        ]);
        Kategori::where('id_kategori', $request->id)->update([
            'kategori' => $request->kategori
        ]);
        return redirect('kategori')->with('status','Berhasil Mengubah Kategori!');
    }
}
