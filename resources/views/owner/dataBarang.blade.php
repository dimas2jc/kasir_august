@extends('layouts.owner')
@section('title','Data Barang')

@section('content')
<h6>DATA BARANG</h6>
<button class="btn btn-primary my-3" data-toggle="modal" data-target="#inputModal">Tambah Barang</button>
<form action="/dataBarang/search" method="get">
    <div class="form-group row">
        <div class="col-sm-4 mt-2">
            <input type="text" class="form-control" id="cari" placeholder="Cari barang" name="cari">
        </div>
        <button type="submit" class="btn btn-primary mt-2 ">Cari</button>

    </div>
</form>
<table id="myTable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Id Barang</th>
            <th>Tanggal Input</th>
            <th>Nama Barang</th>
            <th>Harga barang (Rp)</th>
            <th>stock (pcs)</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barang as $br)
        <tr>
            <td>{{$br->id_barang}}</td>
            <td>{{$br->tanggal_input}}</td>
            <td>{{$br->nama}}</td>
            <td>{{$br->harga}}</td>
            <td>{{$br->stock}}</td>
            <td width="100px">
                <button class="btn btn-success" data-toggle="modal" data-target="#updateModal{{$br->id_barang}}">Edit</button>
                <a href="/dataBarang/delete/{{$br->id_barang}}">
                    <button class="btn btn-danger">Hapus</button>
                </a>
                <div class="modal" tabindex="-1" role="dialog" id="updateModal{{$br->id_barang}}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <!-- Form Input Data Pegawai -->
                            <form method="post" action="/dataBarang/update/{{$br->id_barang}}">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title">Input Barang</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama Barang<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nama" placeholder="Nama barang" name="nama" value="{{$br->nama}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Input<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="tanggal" placeholder="" name="tanggal" value="{{$br->tanggal_input}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga" class="col-sm-3 col-form-label">harga<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga" value="{{$br->harga}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="stock" class="col-sm-2 col-form-label">Stock<span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="stock" placeholder="Stock Barang" name="stock" value="{{$br->stock}}" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    <button type="submit" class="btn btn-primary">Tambah</button>

                                </div>
                            </form>
                            <!-- Akhir Form input Data Pegawai -->
                        </div>
                    </div>
                </div>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal" tabindex="-1" role="dialog" id="inputModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Form Input Data Pegawai -->
            <form method="post" action="{{url('/dataBarang/insert')}}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Input Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Barang<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" placeholder="Nama barang" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Input<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tanggal" placeholder="" name="tanggal" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-3 col-form-label">harga<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stock" class="col-sm-2 col-form-label">Stock<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="stock" placeholder="Stock Barang" name="stock" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-primary">Tambah</button>

                </div>
            </form>
            <!-- Akhir Form input Data Pegawai -->
        </div>
    </div>
</div>
@endsection