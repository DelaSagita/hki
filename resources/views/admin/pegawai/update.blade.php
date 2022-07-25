@extends('template_admin.home')
@section('judul','Pegawai')
@section('sub_judul','Update Data Pegawai')
@section('content')

<form action="{{url('pegawai-update', $pegawai->id)}}" enctype="multipart/form-data" method="POST">
    @csrf
<div class="card">
    <div class="card-header">
        <h3>UPDATE DATA PEGAWAI</h3>
    </div>
    <div class="card-body">
        <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">NIP</label>
                <input id="inputText3" type="text" class="form-control" placeholder="NIP" name="nip" value="{{ $pegawai->nip  }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">NUP</label>
                <input id="inputText3" type="text" class="form-control" placeholder="NUP" name="nup" value="{{ $pegawai->nup  }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">NIK</label>
                <input id="inputText3" type="text" class="form-control" placeholder="NIK" name="nik_ktp" value="{{ $pegawai->nik_ktp  }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Nama</label>
                <input id="inputText3" type="text" class="form-control" placeholder="Nama" name="nama" value="{{ $pegawai->nama  }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Email</label>
                <input id="inputText3" type="email" class="form-control" placeholder="Email" name="email" value="{{ $pegawai->email  }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Gelar Depan</label>
                <input id="inputText3" type="text" class="form-control" placeholder="Gelar Depan" name="gelar_depan" value="{{ $pegawai->gelar_depan  }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Gelar Belakang</label>
                <input id="inputText3" type="text" class="form-control" placeholder="Gelar Belakang" name="gelar_belakang" value="{{ $pegawai->gelar_belakang  }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Tempat Lahir</label>
                <input id="inputText3" type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="{{ $pegawai->tempat_lahir  }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Tanggal Lahir</label>
                <input id="inputText3" type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ $pegawai->tanggal_lahir  }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="" class="form-control">
                    <option value="" @if ($pegawai->jenis_kelamin == '') selected @endif>Pilih Jenis Kelamin</option>
                    <option value="laki-laki" @if ($pegawai->jenis_kelamin == 'laki-laki') selected @endif>Laki-laki</option>
                    <option value="perempuan" @if ($pegawai->jenis_kelamin == 'perempuan') selected @endif>Perempuan</option>

                </select>

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Agama</label>
                <input id="inputText3" type="text" class="form-control" placeholder="Agama" name="agama" value="{{ $pegawai->agama  }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Update Password</label>
                <input id="inputText3" type="password" class="form-control" placeholder="Password" name=" ">
            </div>
        </div>
        </div>

    </div>
    <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary">SIMPAN</button>
        <a href="{{ url('admin/pegawai')  }}" class="btn btn-secondary">BATAL</a>
    </div>

</div>
</form>
@endsection
