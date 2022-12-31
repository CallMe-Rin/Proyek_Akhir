<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PinjamController;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Route;

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
    $jumlahpegawai = Pegawai::count();
    $jumlahpegawailaki = Pegawai::where('jeniskelamin','laki-laki')->count();
    $jumlahpegawaiperempuan = Pegawai::where('jeniskelamin','perempuan')->count();
    
    return view('welcome',compact('jumlahpegawai','jumlahpegawailaki','jumlahpegawaiperempuan'));
});

route::get('/pegawai',[PegawaiController::class, 'index'])->name('pegawai')->middleware('auth');

route::get('/tambahpegawai',[PegawaiController::class, 'tambahpegawai'])->name('tambahpegawai');
route::post('/insertdata',[PegawaiController::class, 'insertdata'])->name('insertdata');

route::get('/tampilkandata/{id}',[PegawaiController::class, 'tampilkandata'])->name('tampilkandata');
route::post('/updatedata/{id}',[PegawaiController::class, 'updatedata'])->name('updatedata');

route::get('/delete/{id}',[PegawaiController::class, 'delete'])->name('delete');

route::get('/login',[LoginController::class, 'login'])->name('login');
route::post('/loginuser',[LoginController::class, 'loginuser'])->name('loginuser');


route::get('/register',[LoginController::class, 'register'])->name('register');
route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

route::get('/logout',[LoginController::class, 'logout'])->name('logout');

route::get('/dataanggota',[AnggotaController::class, 'dataanggota'])->name('dataanggota')->middleware('auth');
route::get('/tambahanggota',[AnggotaController::class, 'tambahanggota'])->name('tambahanggota');

route::post('/insertdataanggota',[AnggotaController::class, 'insertdataanggota'])->name('insertdataanggota');
route::get('/tampilkandataanggota/{id}',[AnggotaController::class, 'tampilkandataanggota'])->name('tampilkandataanggota');
route::post('/updatedataanggota/{id}',[AnggotaController::class, 'updatedataanggota'])->name('updatedataanggota');

route::get('/deleteanggota/{id}',[AnggotaController::class, 'deleteanggota'])->name('deleteanggota');

route::get('/datapinjam',[PinjamController::class, 'datapinjam'])->name('datapinjam')->middleware('auth');
route::get('/tambahpinjam',[PinjamController::class, 'tambahpinjam'])->name('tambahpinjam');

route::post('/insertdatapinjam',[PinjamController::class, 'insertdatapinjam'])->name('insertdatapinjam');
route::get('/tampilkandatapinjam/{id}',[PinjamController::class, 'tampilkandatapinjam'])->name('tampilkandatapinjam');
route::post('/updatedatapinjam/{id}',[PinjamController::class, 'updatedatapinjam'])->name('updatedatapinjam');

route::get('/deletepinjam/{id}',[PinjamController::class, 'deletepinjam'])->name('deletepinjam');