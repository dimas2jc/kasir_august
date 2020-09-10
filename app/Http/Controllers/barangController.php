<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan daftar Barang yang ada
        $barang = DB::table('data_barang')->get();
        return view('owner.dataBarang', ['barang' => $barang]);
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
        //Input data barang ke database
        DB::table('data_barang')->insert([
            'tanggal_input' => $request->tanggal,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock
        ]);
        echo ("<script>alert('berhasil input')</script>");
        echo (redirect('/dataBarang'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //Update Data Barang
        DB::table('data_barang')->where('id_barang', $id)->update([
            'tanggal_input' => $request->tanggal,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock
        ]);
        echo ("<script>alert('berhasil update')</script>");
        echo (redirect('/dataBarang'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Menghapus Data
        DB::table('data_barang')->where('id_barang', $id)->delete();
        echo ("<script>alert('Barang berhasil Dihapus')</script>");
        echo (redirect('/dataBarang'));
    }

    public function search(Request $request)
    {
        $cari = $request->cari;

        $barang = DB::table('data_barang')->where('nama', 'like', '%' . $cari . '%')->get();
        return view('owner.dataBarang', ['barang' => $barang]);
    }
}
