@extends('layouts.owner')
@section('tite','Laporan Transaksi')

@section('content')
<h6>LAPORAN TRANSAKSI</h6>
<table id="myTable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Id Transaksi</th>
            <th>Tanggal Transaksi</th>
            <th>Nama Barang</th>
            <th>Harga barang</th>
            <th>nama Pegawai</th>
            <th>Jumlah</th>
            <th>total transaksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>17-09-2020</td>
            <td>Buah apel</td>
            <td>20.000/kg</td>
            <td>Cloudias</td>
            <td>100kg</td>
            <td>2.000.000</td>
        </tr>
    </tbody>
</table>
@endsection