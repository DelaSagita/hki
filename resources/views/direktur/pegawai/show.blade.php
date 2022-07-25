<x-app>

@section('judul','Pegawai')
@section('sub_judul','Data Pegawai')


<div class="row justify-content-center">
    <div class="col-md-10">



<div class="card">
    <div class="card-header">
       <h3>DETAIL DATA PEGAWAI</h3>
    </div>
    <div class="card-body">
       <table class="table">
            <tr>
                <th>Nama</th>
                <td>:</td>
                <td>{{ $pegawai->nama  }}</td>
            </tr>
            <tr>
                <th>NIP</th>
                <td>:</td>
                <td>{{ $pegawai->nip  }}</td>
            </tr>
            <tr>
                <th>NUP</th>
                <td>:</td>
                <td>{{ $pegawai->nup  }}</td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>:</td>
                <td>{{ $pegawai->nik_ktp  }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>:</td>
                <td>{{ $pegawai->email  }}</td>
            </tr>
            <tr>
                <th>Gelar Depan</th>
                <td>:</td>
                <td>{{ $pegawai->gelar_depan  }}</td>
            </tr>
            <tr>
                <th>Gelar Belakang</th>
                <td>:</td>
                <td>{{ $pegawai->gelar_belakang  }}</td>
            </tr>
            <tr>
                <th>Tempat Tanggal Lahir</th>
                <td>:</td>
                <td>{{ $pegawai->tempat_lahir.','.$pegawai->tanggal_lahir  }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>{{ $pegawai->jenis_kelamin  }}</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>{{ $pegawai->agama  }}</td>
            </tr>
       </table>
    </div>
    <div class="card-footer text-right">
        <a href="{{ url('direktur/pegawai')  }}" class="btn btn-secondary">KEMBALI</a>
    </div>
</div>
    </div>
</div>



</x-app>
