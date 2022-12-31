<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dataanggota()
    {
        $data = Anggota::all();
        return view('dataanggota',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahanggota()
    {
        return view('tambahanggota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertdataanggota(Request $request)
    {
        $data = Anggota::create($request->all());
        return Redirect()->route('dataanggota')->with('selamat','Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function tampilkandataanggota($id){
        $data = Anggota::find($id);
        //dd($data);
        return view('tampildataanggota',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function updatedataanggota(Request $request, $id){
        $data = Anggota::find($id);
        $data->update($request->all());
        return redirect()->route('dataanggota')->with('selamat','Data Berhasil Di Update!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function deleteanggota($id){
        $data = Anggota::find($id);
        $data->delete();
        return redirect()->route('dataanggota')->with('delete','Data Berhasil Dihapus!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        //
    }
}
