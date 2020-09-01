@extends('layouts.kasirLayout')

@section('title','Halaman Kasir')

@section('content')
<form method="post">
    <div class="row">
        <div class="form-group col-sm-3">
            <label for="idBarang">ID Barang</label>
            <input type="text" class="form-control" id="idBarang" aria-describedby="emailHelp" placeholder="ID Barang">
        </div>
        <div class="form-group col-sm-3">
            <label for="exampleInputPassword1">Nama Barang</label>
            <input type="text" class="form-control" id="exampleInputPassword1" disabled>
        </div>
        <div class="form-group col-sm-3" method="post">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" aria-describedby="emailHelp" disabled>
        </div>
        <div class="form-group col-sm-3" method="post">
            <label for="jumlahBarang">Jumlah Barang</label>
            <input type="text" class="form-control" id="jumlahBarang" aria-describedby="emailHelp" value=1>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
</form>
<!-- Table -->
<table id="myTable" class="table table-striped table-bordered mt-4">
    <thead>
        <tr>
            <th>Id barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah Barang</th>
            <th>Subtotal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <button class="btn btn-danger">Hapus</button>
            </td>
            <td>1</td>
            <td>Apel</td>
            <td>5000</td>
            <td>2</td>
            <td>10000</td>

        </tr>
        <tr>
            <th colspan='5' class="text-dark text-center">Total</th>
            <th colspan='1' class="text-dark">Rp. </th>
        </tr>
    </tbody>
</table>
<!-- End Table -->
@endsection