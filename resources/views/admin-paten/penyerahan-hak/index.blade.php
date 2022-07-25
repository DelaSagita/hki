@extends('template_admin.home')
@section('judul','Data Kepemilikan')
@section('sub_judul','Tambah Kepemilikan')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    PENYERAHAN HAK
                    <a href="{{ url('penyerahan-hak/create') }}" class="btn btn-dark float-right"><i
                            class="fa fa-plus"></i> Tambah Pernyataan </a>
                </div>
                <div class="card-body">
                    <table class="table dataTable">
                        <thead>
                            <tr>
                                <th><center> No </center></th>
                                <th><center> Judul </center></th>
                                <th><center> Action </center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($list_paten as $item)
                                <tr>
                                    <td><center> {{ $no++ }} </center></td>
                                    <td><center> {{ $item->judul }} </center></td>
                                    <td><center>
                                        <a href="{{ url('penyerahan-hak', $item->id) }}"
                                            class="btn btn-info"><i class="fa fa-eye"></i> Lihat Pengalihan</a>
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
