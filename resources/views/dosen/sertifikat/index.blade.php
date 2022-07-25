

@extends('layout.basepegawai')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">DATA SERTIFIKAT</h2>
                <p class="pageheader-text">SIHAKI | Sistem Informasi Hak Kekayaan Intelektual.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Menu</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
               
                <div class="card-body">
                    <table class="table dataTable">
                        <thead>
                            <tr>
                                <th><center>No</center></th>
                                <th><center>NAMA PENGAJU</center></th>
                                <th><center>JENIS PENGAJUAN</center></th>
                                <th><center>JUDUL</center></th>
                                <th><center>SERTIFIKAT</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sertifikat as $item)
                            <tr>
                                <td><center>{{ $loop->iteration}}</center></td>
                                <td><center>{{ $item->nama}}</center></td>
                                <td><center>{{ $item->nama_kategori}}</center></td>
                                <td><center>{{ $item->judul}}</center></td>
                                <td>
                                    <a href="{{ url('public/'.$item->file_sertifikat)}}" class="btn btn-sm btn-success" target="_blank" download="">
                                        <i class="fa fa-download"></i>
                                        <span>Download Dokumen</span>
                                    </a>
                                </td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection