@extends('template_admin.home')
@section('judul','Data Kepemilikan')
@section('sub_judul','Detail Kepemilikan')
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
                            <dd>{{ $pemilik->judul }}</dd>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead class="thead-dark">
                                    <th>No</th>
                                    <th>File Hak KEPEMILIKAN</th>
                                    <th>List TTD</th>
                                </thead>
                                <tbody>
                                    <td>1</td>
                                    <td>
                                        <a href="{{ url($pemilik->file) }}" class="btn btn-dark"> Download File
                                            kepemilikan</a>
                                    </td>
                                    <td>
                                        <a href="{{ url($pemilik->file_list) }}" target="_blank" class="btn btn-dark">
                                            Download List ttd</a>
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
