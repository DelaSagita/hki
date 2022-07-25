
@extends('layout.basepegawai')
@section('content')

<div class="card"> 
    <div class="card-header">
       <h3>DETAIL DATA PENGAJUAN</h3>
    </div>
    <div class="card-body">
        @foreach ($pengajuan as $pegawai)@endforeach
       <div class="row">
        <div class="col-md-6">
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
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <th>Status Pengajuan</th>
                    <td>:</td>
                    <td>{{ $pegawai->status  }}</td>
                </tr>
                <tr>
                    <th>Kategori Pengajuan</th>
                    <td>:</td>
                    <td>{{ $pegawai->nama_kategori  }}</td>
                </tr>
                <tr>
                    <th>Judul</th>
                    <td>:</td>
                    <td>
                        {!! $pegawai->judul !!}
                    </td>
                </tr>
                <tr>
                    <th>Waktu Pengajuan</th>
                    <td>:</td>
                    <td>{{ $pegawai->created_at  }}</td>
                </tr>
                 <tr>
                    <th>Keterangan</th>         
                </tr>
                <tr>
                    <td colspan="3">{!! $pegawai->keterangan  !!}</td>
                </tr>
                <tr>
                    <th>File Dokumen Pengajuan</th>
                    <td>:</td>
                    <td>
                        @if ($pegawai->status == 'Terverfikasi')
                            <a href="{{ url('public/'.$pegawai->file)}}" class="btn btn-sm btn-success" target="_blank">
                                <i class="fa fa-download"></i>
                                <span>Download Dokumen</span>
                            </a>
                        @else
                            {{ '-' }}
                        @endif
                    </td>
                </tr>
            </table>
        </div>
         
       </div>
    </div>

</div>

@endsection