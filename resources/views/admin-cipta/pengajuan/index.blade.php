@extends('template_admin.home')
@section('judul','Hak Cipta')
@section('sub_judul','Pendaftaran')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    PERMOHONAN HAK CIPTA
                    <a href="{{ url('pendaftaran-ciptaan/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Permohonan</a>
                </div>
                <div class="card-body">
                    <table class="table dataTable">
                        <thead>
                            <tr>
                                <th><center> No </center></th>
                                <th><center>Nama Ciptaan</center></th>
                                <th><center> Action </center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $item)
                                <tr>
                                    <td><center> {{ $no++ }} </center></td>
                                    <td>{{ $item->jenis_judul_pencipta }}</td>
                                    <td>
                                        <center>
                                        <a href="{{ url('pendaftaran-ciptaan', $item->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Lihat Formulir</a>
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
