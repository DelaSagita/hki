@extends('template_admin.home')
@section('judul','Data Merek')
@section('sub_judul','Pengajuan Merek')
@section('content')


<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="">DETAIL MEREK</h3>

                    <table class="table">
                        <tr>
                            <th>Nama Pegawai</th>
                            <td>:</td>
                            <td>{{ $data->nama_pengaju }}</td>
                        </tr>
                        <tr>
                            <th>Nama Merek</th>
                            <td>:</td>
                            <td>{{ $data->nama_merek }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Pengajuan</th>
                            <td>:</td>
                            <td>{{ $data->jenis }}</td>
                        </tr>
                        <tr>
                            <th>Merek</th>
                            <td>:</td>
                            <td>
                               <img src="{{ asset($data-> foto_merek)}}" alt="" style="width:200px;height:100px;border-radius:4px">
                            </td>
                        </tr>
                        <tr>
                            <th>Tanda Tangan</th>
                            <td>:</td>
                            <td>
                                <img src="{{ asset($data-> foto_ttd)}}" alt="" style="width:200px;height:100px;border-radius:4px">
                            </td>
                        </tr>
                    </table>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
</div>










@endsection
