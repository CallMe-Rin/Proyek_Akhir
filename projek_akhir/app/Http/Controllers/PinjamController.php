<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function datapinjam()
    {
        $data = Pinjam::all();
        return view('datapinjam',compact('data'));
    }

    public function tambahpinjam()
    {
        return view('tambahpinjam');
    }

    public function insertdatapinjam(Request $request)
    {
        $data = Pinjam::create($request->all());
        return Redirect()->route('datapinjam')->with('selamat','Data Berhasil Di Tambahkan');
    }

    public function tampilkandatapinjam($id){
        $data = Pinjam::find($id);
        //dd($data);
        return view('tampilkandatapinjam',compact('data'));
    }

    public function updatedatapinjam(Request $request, $id){
        $data = Pinjam::find($id);
        $data->update($request->all());
        return redirect()->route('datapinjam')->with('selamat','Data Berhasil Di Update!');
    }

    public function deletepinjam($id){
        $data = Pinjam::find($id);
        $data->delete();
        return redirect()->route('datapinjam')->with('delete','Data Berhasil Dihapus!');
    }
}
