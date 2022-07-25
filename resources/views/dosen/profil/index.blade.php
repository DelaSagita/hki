<x-dosen>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3>PROFIL</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Nama</th>
                        <td>:</td>
                        <td>{{ auth('pegawai')->user()->nama  }}</td>
                    </tr>
                    <tr>
                        <th>NIP</th>
                        <td>:</td>
                        <td>{{ auth('pegawai')->user()->nip  }}</td>
                    </tr>
                    <tr>
                        <th>NUP</th>
                        <td>:</td>
                        <td>{{ auth('pegawai')->user()->nup  }}</td>
                    </tr>
                    <tr>
                        <th>NIK</th>
                        <td>:</td>
                        <td>{{ auth('pegawai')->user()->nik_ktp  }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td>{{ auth('pegawai')->user()->email  }}</td>
                    </tr>
                    <tr>
                        <th>Gelar Depan</th>
                        <td>:</td>
                        <td>{{ auth('pegawai')->user()->gelar_depan  }}</td>
                    </tr>
                    <tr>
                        <th>Gelar Belakang</th>
                        <td>:</td>
                        <td>{{ auth('pegawai')->user()->gelar_belakang  }}</td>
                    </tr>
                    <tr>
                        <th>Tempat Tanggal Lahir</th>
                        <td>:</td>
                        <td>{{ auth('pegawai')->user()->tempat_lahir.','.auth('pegawai')->user()->tanggal_lahir  }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>:</td>
                        <td>{{ auth('pegawai')->user()->jenis_kelamin  }}</td>
                    </tr>
                    <tr>
                        <th>Agama</th>
                        <td>:</td>
                        <td>{{ auth('pegawai')->user()->agama  }}</td>
                    </tr>

                    <tr>
                        <td colspan="3" class="text-right">
                            <button type="button" class="btn btn-primary btn-sm" data-target="#update" data-toggle="modal">UPDATE PROFILE</button>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{ url('pegawai/profil',auth('pegawai')->user()->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">UPDATE AKUN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">NIP</label>
                <input id="inputText3" type="text" class="form-control" placeholder="NIP" name="nip" value="{{ auth('pegawai')->user()->nip  }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">NUP</label>
                <input id="inputText3" type="text" class="form-control" placeholder="NUP" name="nup" value="{{ auth('pegawai')->user()->nup  }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">NIK</label>
                <input id="inputText3" type="text" class="form-control" placeholder="NIK" name="nik_ktp" value="{{ auth('pegawai')->user()->nik_ktp  }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Nama</label>
                <input id="inputText3" type="text" class="form-control" placeholder="Nama" name="nama" value="{{ auth('pegawai')->user()->nama  }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Email</label>
                <input id="inputText3" type="email" class="form-control" placeholder="Email" name="email" value="{{ auth('pegawai')->user()->email  }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Gelar Depan</label>
                <input id="inputText3" type="text" class="form-control" placeholder="Gelar Depan" name="gelar_depan" value="{{ auth('pegawai')->user()->gelar_depan  }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Gelar Belakang</label>
                <input id="inputText3" type="text" class="form-control" placeholder="Gelar Belakang" name="gelar_belakang" value="{{ auth('pegawai')->user()->gelar_belakang  }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Tempat Lahir</label>
                <input id="inputText3" type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="{{ auth('pegawai')->user()->tempat_lahir  }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Tanggal Lahir</label>
                <input id="inputText3" type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ auth('pegawai')->user()->tanggal_lahir  }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="" class="form-control">
                    <option value="" @if (auth('pegawai')->user()->jenis_kelamin == '') selected @endif>Pilih Jenis Kelamin</option>
                    <option value="laki-laki" @if (auth('pegawai')->user()->jenis_kelamin == 'laki-laki') selected @endif>Laki-laki</option>
                    <option value="perempuan" @if (auth('pegawai')->user()->jenis_kelamin == 'perempuan') selected @endif>Perempuan</option>

                </select>

            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Agama</label>
                <input id="inputText3" type="text" class="form-control" placeholder="Agama" name="agama" value="{{ auth('pegawai')->user()->agama  }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Update Password</label>
                <input id="inputText3" type="password" class="form-control" placeholder="Password" name=" ">
            </div>
        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
        </div>
    </form>
  </div>
</div>

</x-dosen>
