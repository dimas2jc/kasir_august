@extends('layouts.kasirLayout')

@section('title','Halaman Kasir')

@section('content')
<form method="post">
    <div class="row">
        <div class="form-group col-sm-1">
            <label for="idBarang">ID</label>
            <input type="text" class="form-control" id="idBarang" aria-describedby="emailHelp" placeholder="ID">
        </div>
        <div class="form-group col-sm-3">
            <label for="exampleInputPassword1">Nama Barang</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group col-sm-3" method="post">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" aria-describedby="emailHelp" disabled>
        </div>

        <button type="submit" class="btn btn-primary mt-4 mb-2 col-sm-1">Submit</button>
    </div>
</form>
<!-- Table -->
<div class="row">
    <div class="col-lg-9">
        <table id="myTable" class="table table-striped table-bordered mt-4" height="100px">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Barang</th>
                    <th>Harga (pcs)</th>
                    <th>QTY(pcs)</th>
                    <th>subtotal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <div class="dataTables_scrollBody ">
                <tbody>
                    <tr>
                        <form action="" method="post">
                            <td width="75px">1</td>
                            <td>Apel</td>
                            <td>5000</td>
                            <td width="50px"><input type="number" name="qty_pcs" class="w-100"></td>
                            <td>10000</td>
                        </form>
                        <td>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <form action="" method="post">
                            <td>1</td>
                            <td>Apel</td>
                            <td>5000</td>
                            <td width="50px"><input type="number" name="qty_pcs" class="w-100"></td>
                            <td>10000</td>
                        </form>
                        <td>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </div>
        </table>
    </div>
    <!-- End Table -->
    <div class="col-lg-3">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">

                    <span class="font-weight-bold col-sm-12 mt-3">Pembayaran</span>

                    <span class="col-sm-10 mt-3">Jumlah Item: </span>
                    <span class="col-sm-2 mt-3 ml-n4">2</span>

                    <span class="col-sm-10 mt-3">Total Harga: </span>
                    <span class="col-sm-2 mt-3 ml-n4">20.000 </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection