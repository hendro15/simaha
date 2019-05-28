<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Mahasiswa::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        //
        $siswa = new Mahasiswa;
        $siswa->nim = $request->nim;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->prodi = $request->prodi;
        $siswa->save();

        $res['code'] = 200;
        $res['message'] = "Data Berhasil Dibuat";
        return response($res);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(request $request)
    {
        //
        $siswa = Mahasiswa::where('nim', $request->nim)->first();
        if($siswa != null){
            return response($siswa);
        } else {
            $res['status'] = 400;
            $res['message'] = "Data tidak ditemukan";
            return response($res);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {
        //
        $nim = $request->nim;
        $nama = $request->nama;
        $alamat = $request->alamat;
        $prodi = $request->prodi;

        $siswa = Mahasiswa::find($id);
        $siswa->nim = $nim;
        $siswa->nama = $nama;
        $siswa->alamat = $alamat;
        $siswa->prodi = $prodi;
        $siswa->save();

        $res['message'] = "Data Berhasil Diupdate";
        $res['data'] = $siswa;
        return response($res);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
