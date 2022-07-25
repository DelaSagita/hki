@extends('template_admin.home')
@section('judul','Data Kepemilikan')
@section('sub_judul','Tambah Kepemilikan')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Pengajuan permohonan hak cipta
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <dt>Nama Ciptaan</dt>
                            <dd>{{ $paten->judul }}</dd>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead class="thead-dark">
                                    <th>No</th>
                                    <th>File Hak Penyerahan</th>
                                    <th>NPWP</th>
                                    <th>KTP</th>
                                </thead>
                                <tbody>
                                    <td>1</td>
                                    <td>
                                        <a href="{{ url($paten->file) }}" class="btn btn-dark"> Download File penyerahan</a>
                                    </td>
                                    <td>
                                        <a href="{{ url($paten->file_npwp) }}" target="_blank" class="btn btn-dark"> Download NPWP</a>
                                    </td>
                                    <td>
                                        <a href="{{ url($paten->file_ktp) }}" target="_blank" class="btn btn-dark"> Download KTP</a>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
