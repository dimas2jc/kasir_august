<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //tampilkan data pegawai
        $pegawai = DB::table('data_kasir')->get();
        // dump($pegawai);
        return view('owner.dataPegawai', ['pegawai' => $pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Input Data pegawai baru
        DB::table('data_kasir')->insert(
            [
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => $request->password,
                'jenis_kelamin' => $request->jenisKelamin,
                'alamat' => $request->alamat,
                'status' => $request->status
            ]
        );
        return redirect('/dataPegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show edit pegawai
        $pegawai = DB::table('data_kasir')->where('id_pegawai', '=', $id)->get();
        // dump($pegawai);
        return view('owner.editDataPegawai', ['pegawai' => $pegawai]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Update atau edit Data Pegawai

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dump($request);
        DB::table('data_kasir')
            ->where('id_pegawai', $id)
            ->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => $request->password,
                'jenis_kelamin' => $request->jenisKelamin,
                'alamat' => $request->alamat,
                'status' => $request->status
            ]);
        return view('owner.sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete data pegawai
    }
}
