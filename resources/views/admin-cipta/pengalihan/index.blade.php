@extends('template_admin.home')
@section('judul','Pengalihan Hak Cipta')
@section('sub_judul','Hak Cipta')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    PENGALIHAN HAK CIPTA
                    <a href="{{ url('pengalihan-hak-cipta/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Permohonan </a>
                </div>
                <div class="card-body">
                    <table class="table dataTable">
                        <thead>
                            <tr>
                                <th><center> No </center></th>
                                <th><center> Nama Ciptaan </center></th>
                                <th><center> Action </center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($list_pengalihan as $item)
                                <tr>
                                    <td><center> {{ $no++ }} </center></td>
                                    <td>{{ $item->judul }}</td>
                                    <td><center>
                                        <a href="{{ url('pengalihan-hak-cipta', $item->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Lihat Pengalihan</a>
                                    </center></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
