@extends('template_admin.home')
@section('judul','Hak Cipta')
@section('sub_judul','Detail Hak Cipta')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    PENGAJUAN HAK CIPTA
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <dt>Nama Ciptaan</dt>
                            <dd>{{ $hakcipta->jenis_judul_pencipta }}</dd>
                        </div>
                        <div class="col">
                            <dt>Tempat pencipta</dt>
                            <dd>{{ $hakcipta->tempat_pencipta }}</dd>
                        </div>
                        <div class="col">
                            <dt>Tanggal pembuatan pencipta</dt>
                            <dd>{{ $hakcipta->tanngal_pembuatan_pencipta }}</dd>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead class="thead-dark">
                                    <th>No</th>
                                    <th>File Hak cipta</th>
                                    <th>NPWP</th>
                                    <th>KTP</th>
                                </thead>
                                <tbody>
                                    <td>1</td>
                                    <td>
                                        <a href="{{ url($hakcipta->file_permohonan_hakcipta) }}" class="btn btn-dark"> Download File Hak cipta</a>
                                    </td>
                                    <td>
                                        <a href="{{ url($hakcipta->file_npwp) }}" target="_blank" class="btn btn-dark"> Download NPWP</a>
                                    </td>
                                    <td>
                                        <a href="{{ url($hakcipta->file_ktp) }}" target="_blank" class="btn btn-dark"> Download KTP</a>
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
