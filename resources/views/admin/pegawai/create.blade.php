@extends('template_admin.home')
@section('judul','Pegawai')
@section('sub_judul','Tambah Data Pegawai')
@section('content')

@if(count($errors)>0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif




<form action="{{url('pegawai/create')}}" enctype="multipart/form-data" method="POST">
    @csrf
<div class="card">
    <div class="card-body">

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">NIP</label>
                    <input id="inputText3" type="text" class="form-control" placeholder="NIP" name="nip">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">NUP</label>
                    <input id="inputText3" type="text" class="form-control" placeholder="NUP" name="nup">
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">NIK</label>
                    <input id="inputText3" type="text" class="form-control" placeholder="NIK" name="nik_ktp">
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Nama</label>
                    <input id="inputText3" type="text" class="form-control" placeholder="Nama" name="nama">
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Email</label>
                    <input id="inputText3" type="email" class="form-control" placeholder="Email" name="email">
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Gelar Depan</label>
                    <input id="inputText3" type="text" class="form-control" placeholder="Gelar Depan" name="gelar_depan">
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Gelar Belakang</label>
                    <input id="inputText3" type="text" class="form-control" placeholder="Gelar Belakang" name="gelar_belakang">
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Tempat Lahir</label>
                    <input id="inputText3" type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Tanggal Lahir</label>
                    <input id="inputText3" type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir">
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-control">
                        <option value=""> ---Pilih Jenis Kelamin ---</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>

                    </select>
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Agama</label>
                    <input id="inputText3" type="text" class="form-control" placeholder="Agama" name="agama">
                </div>
            </div><div class="col-md-4">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Password</label>
                    <input id="inputText3" type="password" class="form-control" placeholder="Password" name="password">
                </div>
            </div>
        </div>


    </div>
    <div class="card-footer text-right">
        <a href="{{ url('admin/pegawai')  }}" class="btn btn-secondary">BATAL</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>


</div>
</form>







@endsection
