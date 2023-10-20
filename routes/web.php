<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\TanggapanController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PengaduanController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\KategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('user.landing');
// });
Route::get('/',[UserController::class,'index']);

Route::middleware(['isSiswa'])->group(function (){
    Route::post('store/pengaduan',[UserController::class,'storePengaduan']);
    Route::get('laporan',[UserController::class,'laporan']);
    Route::get('laporan/{siapa?}', [UserController::class,'laporan']);
    Route::get('logout',[UserController::class,'logout']);
});

Route::middleware(['guest'])->group(function (){
    //Login
    Route::get('login',[UserController::class,'formLogin']);
    Route::post('login/auth',[UserController::class,'login']);
    //Register
    // Route::get('register',[UserController::class,'formRegister']);
    // Route::post('register/auth',[UserController::class,'register']);
});

    Route::middleware(['isAdmin'])->group(function (){
        //Petugas
        Route::get('kategori',[KategoriController::class,'index']);
        Route::get('kategori/add',[KategoriController::class,'add']);
        Route::post('kategori/create',[KategoriController::class,'create']);
        Route::get('kategori/edit/{id}',[KategoriController::class,'edit']);
        Route::post('kategori/update/{id}',[KategoriController::class,'update']);
        Route::get('kategori/delete/{id}',[KategoriController::class,'delete']);

        Route::get('petugas',[PetugasController::class,'index']);
        Route::get('petugas/add',[PetugasController::class,'add']);
        Route::post('petugas/create',[PetugasController::class,'create']);
        Route::get('petugas/edit/{id}',[PetugasController::class,'edit']);
        Route::post('petugas/update/{id}',[PetugasController::class,'update']);
        Route::get('petugas/delete/{id}',[PetugasController::class,'delete']);
        //Siswa
        Route::get('siswa',[SiswaController::class,'index']);
        Route::get('siswa/add',[SiswaController::class,'add']);
        Route::post('siswa/create',[SiswaController::class,'create']);
        Route::get('siswa/edit/{id}',[SiswaController::class,'edit']);
        Route::post('siswa/update/{id}',[SiswaController::class,'update']);
        Route::get('siswa/delete/{id}',[SiswaController::class,'delete']);
        Route::get('siswa/detail/{id}',[SiswaController::class,'detail']);
    });

    Route::middleware(['isPetugas'])->group(function (){
         //Dashboard
         Route::get('dashboard',[DashboardController::class,'index']);
         //Pengaduan
         Route::get('pengaduan',[PengaduanController::class,'index']);
         Route::get('pengaduan/detail/{id}',[PengaduanController::class,'detail']);
         //Tanggapan
        Route::post('tanggapan',[TanggapanController::class,'createOrUpdate']);
        //Laporan
        Route::get('laporann',[LaporanController::class,'index']);
        Route::post('get/laporan',[LaporanController::class,'getLaporan']);
        Route::get('cetak',[LaporanController::class,'cetakLaporan']);
        //LogOut
        Route::get('logout/admin',[AdminController::class,'logout']);
    });

    Route::middleware(['isGuest'])->group(function (){
        Route::get('admin',[AdminController::class,'formLogin']);
        Route::post('login/admin',[AdminController::class,'login']);
    });
// });

