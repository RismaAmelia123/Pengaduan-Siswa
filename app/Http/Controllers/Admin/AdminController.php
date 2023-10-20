<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Petugas;

class AdminController extends Controller
{
    function formLogin(){
        return view('Admin.login');
    }

    function login(Request $request){
       $email = Petugas::where('email', $request->email)->first();
       
       if(!$email){
        return redirect()->back()->with(['pesan' => 'Email tidak terdaftar!']);
       }

       $password = Hash::check($request->password, $email->password);
       
       if(!$password){
        return redirect()->back()->with(['pesan' => 'Password tidak sesuai!']);
       }

       $auth = Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]);

       if($auth){
        return redirect('dashboard');
       }else{
        return redirect()->back()->with(['pesan' => 'Akun tidak terdaftar!']);
       }
    }

    function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin');
    }
}
