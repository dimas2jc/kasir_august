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
            <th>Password</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pegawai as $pg)
        <tr>
            <td>{{$pg ->id_pegawai}}</td>
            <td>{{$pg ->nama}}</td>
            <td>{{$pg ->email}}</td>
            <td>{{$pg ->password}}</td>
            <td>{{$pg ->jenis_kelamin}}</td>
            <td>{{$pg ->alamat}}</td>
            <td>
                <a href="{{url('/editDataPegawai')}}" class="text-light">
                    <button type="submit" class="btn btn-success">Edit</button>
                </a>
                <button type="button" class="btn btn-danger">Hapus</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection