@extends('layouts.auth')

@section('title','Input Data Pegawai')

@section('content')
<h3 class="col-sm-12">Input Data Pegawai</h3>
<form method="post" action="/dataPegawai">
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
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>
</form>
@endsection