<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelaController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PetugaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\HistoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

//Crud Kelas
Route::get('/kela',[KelaController::class,'index'])->name('kela.index');
Route::get('/kela/create',[KelaController::class,'create'])->name('kela.create');
Route::post('/kela/store',[KelaController::class,'store'])->name('kela.store');
Route::delete('/kela/destroy/{id_kelas}',[KelaController::class,'destroy'])->name('kela.destroy');
Route::get('/kela/{id_kelas}',[KelaController::class,'edit'])->name('kela.edit');
Route::put('/kela/{id_kelas}',[KelaController::class,'update'])->name('kela.update');

//Crud Spp
Route::get('/spp',[SppController::class, 'index'])->name('spp.index');
Route::get('/spp/create',[SppController::class, 'create'])->name('spp.create');
Route::post('/spp/store',[SppController::class, 'store'])->name('spp.store');
Route::delete('/spp/destroy/{id_spp}',[SppController::class, 'destroy'])->name('spp.destroy');
Route::get('/spp/{id_spp}',[SppController::class, 'edit'])->name('spp.edit');
Route::put('/spp/{id_spp}',[SppController::class, 'update'])->name('spp.update');

//Crud Siswa
Route::get('/siswa',[SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create',[SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/store',[SiswaController::class, 'store'])->name('siswa.store');
Route::delete('/siswa/destroy/{nisn}',[SiswaController::class, 'destroy'])->name('siswa.destroy');
Route::get('/siswa/{nisn}',[SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nisn}',[SiswaController::class, 'update'])->name('siswa.update');

//Crud Petugas
Route::get('/petuga',[PetugaController::class,'index'])->name('petuga.index');
Route::get('/petuga/create',[PetugaController::class,'create'])->name('petuga.create');
Route::post('/petuga/store',[PetugaController::class,'store'])->name('petuga.store');
Route::delete('/petuga/destroy/{id_petugas}',[PetugaController::class,'destroy'])->name('petuga.destroy');
Route::get('/petuga/{id_petugas}',[PetugaController::class,'edit'])->name('petuga.edit');
Route::put('/petuga/{id_petugas}',[PetugaController::class,'update'])->name('petuga.update');

//Crud Pembayaran
Route::get('/pembayaran',[PembayaranController::class,'index'])->name('pembayaran.index');
Route::get('/pembayaran/create',[PembayaranController::class,'create'])->name('pembayaran.create');
Route::post('/pembayaran/store',[PembayaranController::class,'store'])->name('pembayaran.store');
Route::delete('/pembayaran/destroy/{id_pembayaran}',[PembayaranController::class,'destroy'])->name('pembayaran.destroy');
Route::get('/pembayaran/{id_pembayaran}',[PembayaranController::class,'edit'])->name('pembayaran.edit');
Route::put('/pembayaran/{id_pembayaran}',[PembayaranController::class,'update'])->name('pembayaran.update');
Route::get('/get-data/{nisn}', [PembayaranController::class, 'getData']);
Route::get('/pegawai/cetak_pdf',[PembayaranController::class, 'cetak_pdf']) -> name('cetak_pdf');
Route::get('/pembayaran/show/{pembayaran}',[PembayaranController::class, 'show'])->name('pembayaran.show');

//Histroy
Route::get('/history',[HistoryController::class, 'index'])->name('history.index');
Route::get('/history/export_excel',[HistoryController::class, 'export_excel' ])->name('export_excel');

Auth::routes();
//Login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
