@extends('template_admin.home')
@section('judul','Sertifikat')
@section('sub_judul','Data Sertifikat')
@section('content')


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
                                <th><center>ACTION</center></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_sertifikat as $item)
                            <tr>
                                <td><center>{{ $loop->iteration}}</center></td>
                                <td><center>{{ $item->nama}}</center></td>
                                <td><center>{{ $item->name}}</center></td>
                                <td><center>{{ $item->judul}}</center></td>
                                {{-- <td><center>
                                    <a href="{{ url('public/'.$item->file_sertifikat)}}" class="btn btn-sm btn-success" target="_blank" download="">
                                        <i class="fa fa-download"></i>
                                        <span>Download Dokumen</span>
                                    </a>
                                </center></td> --}}
                                <td>
                                    <center>
                                        <div class="btn btn-group">
                                            <a href="{{ url('public/'.$item->file_sertifikat)}}" class="btn btn-sm btn-success" target="_blank" download="">
                                                <i class="fa fa-download"></i>
                                            </a>
                                            <form action="{{ url('pegawai/delete', $item->id) }}" method="post" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>

                                        </div>
                                    </center>
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
