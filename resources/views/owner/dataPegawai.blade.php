@extends ('layouts.owner')

@section('title','Data Pegawai')

@section('content')
<h6>DATA PEGAWAI KASIR</h6>
<a href="#">
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Pegawai</button>
</a>
<table id="myTable" class="table table-striped table-bordered mt-3">
    <thead>
        <tr>
            <th>Id Pegawai</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>status</th>
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
            <td class="text-info">{{$pg ->status}}</td>
            <td>
                <a href="editDataPegawai/{{$pg->id_pegawai}}" class="text-light">
                    <button type="submit" class="btn btn-success">Edit</button>
                </a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<div class="modal" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- Form Input Data Pegawai -->
            <div class="modal-body">
                <form method="post" action="/dataPegawai/insert">
                    @csrf
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="Cloudias" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Password<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin<span class="text-danger">*</span></legend>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenisKelamin" id="gridRadios1" value="Laki-laki" required>
                                    <label class="form-check-label" for="gridRadios1">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenisKelamin" id="gridRadios2" value="Perempuan">
                                    <label class="form-check-label" for="gridRadios2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="status" placeholder="status" name="status" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary">Sign in</button>

            </div>
            </form>
        </div>
    </div>
</div>
@endsection