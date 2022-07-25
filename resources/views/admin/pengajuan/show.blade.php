@extends('template_admin.home')
@section('judul','Detail Pengajuan')
@section('sub_judul','Detail Data Pengajuan')
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
                    <td>{{ $pegawai->name  }}</td>
                </tr>
                <tr>
                    <th>Judul</th>
                    <td>:</td>
                    <td>{{ $pegawai->judul  }}</td>
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
                        <a href="{{asset($pegawai->file)}}" class="btn btn-sm btn-success" target="_blank">
                            <i class="fa fa-download"></i>
                            <span>Download Dokumen</span>
                        </a>
                    </td>
                </tr>
            </table>
        </div>

       </div>
    </div>
    <div class="card-footer text-right">
        @if ($pegawai->status != 'Terverfikasi')
            <form action="{{ url('pengajuan/perifikasi', $pegawai->id_pengajuan) }}" method="POST"  onclick="return confirm('Yakin ingin memperifikasi data ini ?!');">
                @csrf
                <button type="submit" class="btn btn-sm btn-primary">VERIFIKASI</button>
            </form>
        @else
            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#upload">UPLOAD SERTIFIKAT</button>
        @endif
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{ url('pengajuan/sertifikat')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">UPLOAD SERTIFIKAT <span style="text-transform: uppercase">{{ $pegawai->name}}</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id_pengajuan" class="form-control" value="{{ $pegawai->id_pengajuan  }}">
                <input type="hidden" name="id_pegawai" class="form-control" value="{{ $pegawai->id_pegawai  }}">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">File Sertifikat</label>
                        <input type="file" name="file_sertifikat" class="form-control"  required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                <button type="submit" class="btn btn-primary">UPLOAD</button>
            </div>
        </div>
    </form>
  </div>
</div>

@endsection
