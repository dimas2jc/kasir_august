@extends ('layouts.owner')

@section('title','Data Pegawai')

@section('content')
<h6>DATA PEGAWAI KASIR</h6>
<table id="myTable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Id Pegawai</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Cloudias Imani Pradana</td>
            <td>danapradana30@gmail.com</td>
            <td>Laki-laki</td>
            <td>Kuwik</td>
            <td>
                <button type="button" class="btn btn-success">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>
    </tbody>
</table>
@endsection

@section('script')
$(document).ready(function (){
$('#myTable').DataTable();
});
@endsection