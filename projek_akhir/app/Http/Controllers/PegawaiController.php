<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        $data = Pegawai::all();
        return view('datapegawai',compact('data'));
    }

    public function tambahpegawai(){
        return view('tambahpegawai');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        Pegawai::create($request->all());
        return redirect()->route('pegawai')->with('selamat','Data Berhasil Di Tambahkan!');
    }

    public function tampilkandata($id){
        $data = Pegawai::find($id);
        //dd($data);
        return view('tampildata',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Pegawai::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('selamat','Data Berhasil Di Update!');
    }

    public function delete($id){
        $data = Pegawai::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('delete','Data Berhasil Dihapus!');
    }
}
